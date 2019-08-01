<template>
    <div class="hobbies group">
        <div class="heading">
            <h2 class="text-center">Hobbies</h2>
        </div>
        <p class="text-center text-muted">{{ hobbies}}</p>
    </div>
</template>

<script>
    export default {
        name: "Hobbies",
        props: {
            hobbies : {
                type: String,
                required: true
            }
        }
    }
</script>

<style scoped>

</style>