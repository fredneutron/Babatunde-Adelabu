<template>
    <div>
        <div class="row">
            <div class="col-md-6">
                <h3>{{ work.position }}</h3>
                <h4 class="organization">{{ work.company_name }}</h4>
            </div>
            <div
                    class="col-md-6"
                    v-if="work.end_on === null"
            >
                <span class="period">{{ now(work.start_on) }} - Present</span>
            </div>
            <div class="col-md-6" v-else >
                <span class="period">{{ now(work.start_on) }} - {{ now(work.end_on) }}</span>
            </div>
        </div>
        <p class="text-muted" v-html="work.description"></p>
    </div>
</template>

<script>
    export default {
        name: "Work",
        props: {
            work: {
                type: Object,
                required: true,
            }
        }
    }
</script>

<style scoped>

</style>