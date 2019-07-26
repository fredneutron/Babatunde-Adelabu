<template>
    <main class="page contact-page">
        <section class="portfolio-block contact">
            <div class="container">
                <div class="heading">
                    <h2>Contact me</h2>
                </div>
                <div class="row">

                    <!-- Form field for contacting the portfolio's user -->
                    <contact-form></contact-form>

                    <!-- select name,dob,email,phone from database and pass it to contact -->
                    <contact-link :contact="links"></contact-link>
                </div>
            </div>
        </section>
    </main>
</template>

<script>
    export default {
        name: "Contact",
        props: {
            links: {
                type: Object,
                required: true,
            }
        }
    }
</script>

<style scoped>

</style>