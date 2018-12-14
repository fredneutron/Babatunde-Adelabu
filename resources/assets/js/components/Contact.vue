<template>
    <div class="col-lg-7">
        <form v-bind:style="{marginTop: marginTop }" @submit.prevent="submit" method="post">
            <div v-if="errors.length" class="alert alert-danger alert-dismissible" role="alert" >
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <b>Please correct the following error(s):</b>
                <ul>
                    <li v-for="error in errors">{{ error }}</li>
                </ul>
            </div>
            <div v-if="positive" class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <span><i class="icon ion-checkmark"></i> </span>
                <b>{{ positive.data.code }}</b>
                <p>{{ positive.data.message }}</p>
            </div>
            <div v-else ></div>
            <div class="form-group">
                <label for="name">Your Name</label>
                <input
                        id="name"
                        v-model="name"
                        name="name"
                        class="form-control item"
                        required
                        type="text">
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input
                        id="subject"
                        v-model="subject"
                        name="subject"
                        class="form-control item"
                        required
                        type="text">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input
                        id="email"
                        v-model="email"
                        name="email"
                        class="form-control item"
                        type="email">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea
                        id="message"
                        v-model="message"
                        name="message"
                        placeholder="Enter your message..."
                        maxlength="2000"
                        required
                        class="form-control item">
                </textarea>
            </div>
            <div class="form-group"><button class="btn btn-primary btn-block btn-lg" type="submit"><span v-html="sub()"></span></button></div>
        </form>
    </div>
</template>

<script>
    export default {
        name: "Contact",
        data: function () {
            return {
                errors : [],
                name: null,
                subject: null,
                email: null,
                message: null,
                positive: null,
                marginTop: '10px',
		sub: function () {
		return 'Submit Form';
		}
            }
        },
        methods: {
            submit: function () {

                // validation all request data together before api call
                if (this.name && this.subject && this.email && this.message) {
                    // API call to post data to endpoint and send mail to portfolio's user
                    axios.post('/api/mail',{
                        name: this.name,
                        subject: this.subject,
                        email: this.email,
                        message: this.message
                    }).then(res => this.positive = res)
                        .catch(err => err);
                }

                // define errors as array
                this.errors = [];

                // name validation
                if (!this.name) {
                    this.errors.push('Name required.');
                }

                // subject validation
                if (!this.subject) {
                    this.errors.push('Subject required.');
                }

                // email validation
                if (!this.email) {
                    this.errors.push('Email required.');
                }

                // message validation
                if (!this.message) {
                    this.errors.push('Message required.');
                }
            }

        }
    }
</script>

<style scoped>

</style>
