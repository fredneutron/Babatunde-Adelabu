<template>
    <main class="page projects-page">
        <section class="portfolio-block projects-cards">
            <div class="container">
                <div class="heading">
                    <h2>Recent Work</h2>
                </div>

                <!-- pass all registered project from database to projects -->
                <div class="row">
                    <project
                            v-for="(project, index) in projects"
                            :key="index"
                            :index="index"
                            :project="project"
                    ></project>
                </div>
            </div>
        </section>
    </main>
</template>

<script>
    export default {
        name: "Projects",
        props: {
            projects: {
                type: Array,
                required: true,
            }
        }
    }
</script>

<style scoped>

</style>