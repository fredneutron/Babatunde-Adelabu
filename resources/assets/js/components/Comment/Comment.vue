<template>
    <div>
        <hr>
        <p><strong>{{ name }}</strong></p>
        <p>{{ body }}</p>
    </div>
</template>

<script>
    export default {
        name: "Comment",
        props: {
            name: {
                type: String,
                required: true
            },
            body: {
                type: String,
                required: true
            }
        }
    }
</script>

<style scoped>

</style>