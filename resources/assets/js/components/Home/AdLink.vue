<template>
    <section class="portfolio-block call-to-action border-bottom">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center content">
                <h3>{{ ad.phrase }}</h3>
                <a
                        class="btn btn-outline-primary btn-lg"
                        role="button"
                        :href="ad.link"
                >{{ ad.statement }}</a>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name: "AdLink",
        props: {
            ad: {
                type: Object,
                required: true
            }
        }
    }
</script>

<style scoped>

</style>