<template>
    <div>
        <div class="row">
            <div class="col-md-6">
                <h3>{{ education.course }}</h3>
                <h4 class="organization">{{ education.school_name }}</h4>
            </div>
            <div
                    class="col-6"
                    v-if="education.end_on === null"
            >
                <span class="period">{{ now(education.start_on) }} - Present</span>
            </div>
            <div class="col-6" v-else >
                <span class="period">{{ now(education.start_on) }} - {{ now(education.end_on) }}</span>
            </div>
        </div>
        <p class="text-muted" v-html="education.description"></p>
    </div>
</template>

<script>
    export default {
        name: "Education",
        props: {
            education: {
                type: Object,
                required: true,
            }
        }
    }
</script>

<style scoped>

</style>