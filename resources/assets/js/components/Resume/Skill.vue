<template>
    <div>
        <h3>{{ skill.name }}</h3>
        <div class="progress">
            <div
                    class="progress-bar"
                    :style="{ width: skill.percentage+'%' }"
                    :aria-valuenow="skill.percentage"
                    aria-valuemin="0"
                    aria-valuemax="100"
            >
                <span class="sr-only">{{ skill.percentage }}</span>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Skill",
        props: {
            skill: {
                type: Object,
                required: true,
            }
        }
    }
</script>

<style scoped>

</style>