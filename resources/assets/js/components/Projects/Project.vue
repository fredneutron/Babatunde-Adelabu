<template>
    <div class="col-md-6 col-lg-4">
        <div class="card border-0">
            <a :href="project.url">
                <img
                        :src="imagePath+project.image"
                        :alt="project.name"
                        class="card-img-top scale-on-hover"
                >
            </a>
            <div class="card-body">
                <h6>
                    <a :href="project.url">{{ project.name }} <span class="badge badge-primary">{{ project.type }}</span></a>
                </h6>
                <p class="text-muted card-text" v-html="project.description"></p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Project",
        props: {
            project: {
                type: Object,
                required: true
            },
        }
    }
</script>

<style scoped>

</style>