<template>
    <div class="work-experience group">
        <div class="heading">
            <h2 class="text-center">Work Experience</h2>
        </div>
        <div class="item" v-for="work in works">
            <div class="row">
                <div class="col-md-6">
                    <h3>{{ work.position }}</h3>
                    <h4 class="organization">{{ work.company_name }}</h4>
                </div>
                <div class="col-md-6" v-if="work.end_on === null"><span class="period">{{ now(work.start_on) }} - Present</span></div>
                <div class="col-md-6" v-else ><span class="period">{{ now(work.start_on) }} - {{ now(work.end_on) }}</span></div>
            </div>
            <p class="text-muted">{{ work.description }}</p>
        </div>
    </div>
</template>

<script>
    export default {
        name: "WorkExperience",
        props: {
            works: {
                type: Array,
                required: true
            }
        },
        data: () => {
            return {
                now: (n) => {
                    let x = new Date(n);
                    x.setDate(x.getDate());
                    return x.getMonth()+1 +'/'+ x.getFullYear();
                }
            }
        }
    }
</script>

<style scoped>

</style>