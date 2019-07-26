<template>
    <div class="col-lg-8 offset-lg-2" v-html="post"></div>
</template>

<script>
    export default {
        name: "PostBody",
        props: {
            post: {
                type: String,
                required: true,
            }
        }
    }
</script>

<style>
    .embedded_image img {
        max-width: 100%;
        height: auto;
        margin: 0 auto;
        display: block;
    }
    .embedded_image p {
        text-align: center;
        margin-bottom: 0!important;
    }
</style>

<style scoped>

</style>
