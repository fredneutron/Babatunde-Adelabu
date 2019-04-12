<!--suppress ALL -->
<template>
    <section class="portfolio-block skills">
        <div class="container">
            <div class="heading">
                <h2>Special Skills</h2>
            </div>
            <div class="row">
                <div
                    class="col-md-4"
                    v-for="(feature, index) in features"
                    :key="index"
                    :index="index"
                    :id="feature.id"
                >
                    <div class="card special-skill-item border-0">
                        <div class="card-header bg-transparent border-0">
                            <i
                                class="fa"
                                :class="feature.icon"
                            ></i>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">{{ feature.name }}</h3>
                            <p class="card-text" v-html="feature.description"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name: "SkillsAd",
        props: {
            features: {
                type: Array,
                required: true
            },
        }
    }
</script>

<style scoped>

</style>
