<template>
    <section class="portfolio-block website gradient">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-5 offset-lg-1 text">
                    <h3>{{ projects.name }}</h3>
                    <p v-html="projects.description"></p>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div class="portfolio-laptop-mockup">
                        <div class="screen">
                            <div class="screen-content" v-bind:style="{backgroundImage : `url(${path+projects.image})`}"></div>
                        </div>
                        <div class="keyboard"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name: "ProjectAd",
        props: {
            projects: {
                type: Object,
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
