<template>
    <div class="col-md-12 col-lg-5 offset-lg-0">
        <div class="contact-info portfolio-info-card" style="padding:40px;">
            <h2>Contact Info</h2>
            <div class="row">
                <div class="col-1"><i class="icon ion-android-calendar icon"></i></div>
                <div class="col-9"><span>{{ now(contact[0].date_of_birth) }}</span></div>
            </div>
            <div class="row">
                <div class="col-1"><i class="icon ion-person icon"></i></div>
                <div class="col-9"><span>{{ contact[0].first_name }} {{ contact[0].other_name }} {{ contact[0].last_name }}</span></div>
            </div>
            <div class="row">
                <div class="col-1"><i class="icon ion-ios-telephone icon"></i></div>
                <div class="col-9"><span>+{{ contact[0].phone_number }}</span></div>
            </div>
            <div class="row">
                <div class="col-1"><i class="icon ion-at icon"></i></div>
                <div class="col-9"><span>{{ contact[0].email }}</span></div>
            </div>
            <!--<div class="row">-->
                <!--<div class="col-1"><i class="icon ion-pin icon"></i></div>-->
                <!--<div class="col-9"><span>{{ contact[0].residential_address["name"] }}</span></div>-->
            <!--</div>-->
        </div>
    </div>
</template>

<script>
    export default {
        name: "ContactLink",
        props: {
            contact: {
                type: Array,
                required: true
            }
        },
        data: () => {
            return {
                now: (n) => {
                    let x = new Date(n);
                    return x.getDate()+'/'+ (x.getMonth()+1) +'/'+ x.getFullYear();
                }
            }
        }
    }
</script>

<style scoped>

</style>