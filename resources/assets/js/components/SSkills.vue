<!--suppress ALL -->
<template>
    <section class="portfolio-block skills">
        <div class="container">
            <div class="heading">
                <h2>Special Skills</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card special-skill-item border-0">
                        <div class="card-header bg-transparent border-0"><i class="icon ion-ios-star-outline"></i></div>
                        <div class="card-body">
                            <h3 class="card-title">{{ frontend.name }}</h3>
                            <p class="card-text" v-html="frontend.description"></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card special-skill-item border-0">
                        <div class="card-header bg-transparent border-0"><i class="icon ion-ios-lightbulb-outline"></i></div>
                        <div class="card-body">
                            <h3 class="card-title">{{ security.name }}</h3>
                            <p class="card-text" v-html="security.description"></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card special-skill-item border-0">
                        <div class="card-header bg-transparent border-0"><i class="icon ion-ios-gear-outline"></i></div>
                        <div class="card-body">
                            <h3 class="card-title">{{ backend.name }}</h3>
                            <p class="card-text" v-html="backend.description"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name: "SSkills",
        props: {
            frontend: {
                type: Object,
                required: true
            },
            backend: {
                type: Object,
                required: true
            },
            security: {
                type: Object,
                required: true
            }
        }
    }
</script>

<style scoped>

</style>