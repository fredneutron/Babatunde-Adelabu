<template>
    <section class="portfolio-block call-to-action border-bottom">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center content">
                <h3>{{ advertiseText }}</h3><a class="btn btn-outline-primary btn-lg" role="button" v-bind:href="advertiseContactLink">{{ advertiseContact }}</a></div>
        </div>
    </section>
</template>

<script>
    export default {
        name: "AdLink",
        props: {
            advertiseText: {
                type: String,
                required: true
            },
            advertiseContact: {
                type: String,
                required: true
            },
            advertiseContactLink: {
                type: String,
                required: true
            }
        }
    }
</script>

<style scoped>

</style>