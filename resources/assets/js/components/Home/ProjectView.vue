<template>
    <section v-if="project" class="portfolio-block website gradient">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-5 offset-lg-1 text">
                    <h3>{{ project.name }}</h3>
                    <p v-html="project.description"></p>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div class="portfolio-laptop-mockup">
                        <div class="screen">
                            <div
                                    class="screen-content"
                                    :style="{backgroundImage : `url(${imagePath+project.image})`}"
                            ></div>
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
        name: "ProjectView",
        props: {
            project: {
                type: Object,
                required: true
            }
        }
    }
</script>

<style scoped>

</style>
