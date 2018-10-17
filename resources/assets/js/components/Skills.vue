<template>
    <div class="group">
        <div class="row">
            <div class="col-md-12 col-lg-12 offset-lg-0">
                <div class="skills portfolio-info-card">
                    <h2>Skills</h2>
                    <div v-for="skill in skills">
                        <h3>{{ skill.name }}</h3>
                        <div class="progress">
                            <div class="progress-bar" v-bind:style="{width: skill.percentage+'%' }" v-bind:aria-valuenow="skill.percentage" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">{{ skill.percentage }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Skills",
        props: {
            skills: {
                type: Array,
                required: true
            }
        }
    }
</script>

<style scoped>

</style>