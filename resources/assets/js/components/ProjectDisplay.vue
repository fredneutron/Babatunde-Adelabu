<template>
    <section class="portfolio-block photography">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 col-lg-4 item zoom-on-hover" v-for="project in advertiseContent" v-bind:id="project.id">
                    <a v-bind:href="project.url">
                        <img class="img-fluid image" v-bind:src="path+project.image">
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