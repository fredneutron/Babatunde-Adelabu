<template>
    <div class="work-experience group">
        <div class="heading">
            <h2 class="text-center">Work Experience</h2>
        </div>
        <work
                class="item"
                v-for="(work, index) in works"
                :key="index"
                :index="index"
                :work="work"
        ></work>
    </div>
</template>

<script>
    export default {
        name: "WorkExperiences",
        props: {
            works: {
                type: Array,
                required: true
            }
        }
    }
</script>

<style scoped>

</style>