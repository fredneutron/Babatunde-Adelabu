<template>
    <div class="row">
        <div class="col-md-6 col-lg-4" v-for="project in projects">
            <div class="card border-0">
                <a v-bind:href="project.url">
                    <img v-bind:src="path+project.image" alt="Card Image" class="card-img-top scale-on-hover">
                </a>
                <div class="card-body">
                    <h6><a v-bind:href="project.url">{{ project.name }}</a></h6>
                    <p class="text-muted card-text">{{ project.description }}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "RecentProjects",
        props: {
            projects: {
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