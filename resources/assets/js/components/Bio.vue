<template>
    <section class="portfolio-block block-intro">
        <div class="container">
            <div class="avatar" v-bind:style="{backgroundImage : `url(${path+bio[0].profile_picture})`}"></div>
            <div class="about-me">
                <h2 class="text-monospace text-primary">{{ bio[0].first_name }} {{ bio[0].other_name }} {{ bio[0].last_name }}</h2>
                <p v-html="bio[0].bio_description"></p>
                <div v-if="cv"></div>
                <a v-else class="btn btn-outline-primary" role="button"  v-bind:href="contactLink">{{ contactAd }}</a>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name: "Bio",
        props: {
            bio: {
                type: Array,
                required: true
            },
            contactLink : {
                type: String,
                required: true
            },
            contactAd: {
                type: String,
                required: true
            },
            cv: {
                type: String,
                required: true
            },
            path: {
                type: String,
                required: true
            }
        }
    }
</script>

<style scoped>

</style>