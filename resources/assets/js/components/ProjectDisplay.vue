<template>
    <section class="portfolio-block photography">
        <div class="container">
            <div class="row no-gutters">
                <div
                    v-if="advertiseContent.length > 0"
                    class="col-md-6 col-lg-4 item zoom-on-hover"
                    v-for="(project, index) in advertiseContent"
                    :key="index"
                    :index="project.id"
                >
                    <a :href="project.url">
                        <img class="img-fluid image" :src="path+project.image">
                    </a>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name: "ProjectDisplay",
        props: {
            advertiseContent: {
                type: Array,
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
