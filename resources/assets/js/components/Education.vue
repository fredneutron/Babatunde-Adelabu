<template>
    <div class="education group">
        <div class="heading">
            <h2 class="text-center">Education</h2>
        </div>
        <div class="item" v-for="edu in education">
            <div class="row">
                <div class="col-md-6">
                    <h3>{{ edu.course }}</h3>
                    <h4 class="organization">{{ edu.school_name }}</h4>
                </div>
                <div class="col-6" v-if="edu.end_on === null"><span class="period">{{ now(edu.start_on) }} - Present</span></div>
                <div class="col-6" v-else ><span class="period">{{ now(edu.start_on) }} - {{ now(edu.end_on) }}</span></div>
            </div>
            <p class="text-muted" v-html="edu.description"></p>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Education",
        props: {
            education: {
                type: Array,
                required: true
            }
        },
        data: () => {
            return {
                now: (n) => {
                    let x = new Date(n);
                    return x.getMonth()+1 +'/'+ x.getFullYear();
                }
            }
        }
    }
</script>

<style scoped>

</style>