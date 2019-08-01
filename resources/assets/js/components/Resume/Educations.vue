<template>
    <div class="education group">
        <div class="heading">
            <h2 class="text-center">Education</h2>
        </div>
        <education
                class="item"
                v-for="(education, index) in educations"
                :key="index"
                :index="index"
                :education="education"
        ></education>
    </div>
</template>

<script>
    export default {
        name: "Educations",
        props: {
            educations: {
                type: Array,
                required: true
            }
        }
    }
</script>

<style scoped>

</style>