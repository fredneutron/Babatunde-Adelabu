<template>
    <div class="col-lg-7">
        <form
                @submit.prevent="submit"
                method="post"
        >
            <form-error
                    v-if="errors.length"
                    :errors="errors"
            ></form-error>
            <form-response
                    v-if="positive"
                    :response="positive"
            ></form-response>
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
            <div class="form-group">
                <button
                        class="btn btn-primary btn-block btn-lg"
                        type="submit"
                >
                    <span><i class="fas fa-circle-notch fa-spin"></i> {{ ButtonText }} </span>
                </button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        name: "ContactForm",
        data: function () {
            return {
                errors : [],
                name: null,
                subject: null,
                email: null,
                message: null,
                positive: null,
                marginTop: '10px',
                ButtonText: 'Send',
            }
        },
        methods: {
            submit: function () {

                // validation all request data together before api call
                if (this.name && this.subject && this.email && this.message) {
                    this.ButtonText = 'Loading';
                    // API call to post data to endpoint and send mail to portfolio's user
                    axios.post('/api/mail',{
                        name: this.name,
                        subject: this.subject,
                        email: this.email,
                        message: this.message
                    }).then((res) => {
                        this.ButtonText = 'Sent';
                        this.positive = res.data;
                    })
                        .catch(err => err);
                }

                // define errors as array
                this.errors = [];

                // name validation
                if (this.name === '' || typeof this.name !== 'string') {
                    this.errors.push('Name required.');
                }

                // subject validation
                if (this.subject === '' || typeof this.subject !== 'string') {
                    this.errors.push('Subject required.');
                }

                // email validation
                if (this.email === '' || typeof this.email !== 'string') {
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
