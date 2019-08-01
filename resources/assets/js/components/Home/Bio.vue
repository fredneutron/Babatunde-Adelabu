<template>
    <section class="portfolio-block block-intro">
        <div class="container">
            <div
                    class="avatar"
                    :style="{backgroundImage : `url(${imagePath+bio.profile_picture})`}"
            ></div>
            <div class="about-me">
                <h2 class="text-monospace text-primary">{{ bio.first_name }} {{ bio.other_name }} {{ bio.last_name }}</h2>
                <p v-html="bio.bio_description"></p>
                <div v-if="cv"></div>
                <a
                    v-else
                    class="btn btn-outline-primary"
                    role="button"
                    :href="link"
                >{{ statement }}</a>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name: "Bio",
        props: {
            bio: {
                type: Object,
                required: true
            },
            cv: {
                type: Boolean,
                required: true
            },
            link : {
                type: String,
                required: true
            },
            statement: {
                type: String,
                required: true
            }
        }
    }
</script>

<style scoped>

</style>