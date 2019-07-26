<template>
    <div class="group">
        <div class="row">
            <div class="col-md-12 col-lg-12 offset-lg-0">
                <div class="skills portfolio-info-card">
                    <h2>Skills</h2>
                    <skill
                            v-for="(skill, index) in skills"
                            :key="index"
                            :index="index"
                            :skill="skill"
                    ></skill>
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