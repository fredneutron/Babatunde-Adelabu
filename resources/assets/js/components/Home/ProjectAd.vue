<template>
    <section class="portfolio-block photography">
        <div class="container">
            <div class="row no-gutters">
                <div
                    class="col-md-6 col-lg-4 item zoom-on-hover"
                    v-for="(project, index) in projects"
                    :key="index"
                    :index="index"
                    :id="project.id"
                >
                    <a :href="project.url">
                        <img
                            class="img-fluid image"
                            :src="imagePath+project.image"
                            :alt="project.name"
                        >
                    </a>
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
                type: Array,
                required: true
            }
        }
    }
</script>

<style scoped>

</style>
