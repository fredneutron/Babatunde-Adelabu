<template>
    <h4>
        <a :href="BlogLink">{{ BlogName }}</a><span>/ {{ title }}</span>
    </h4>
</template>

<script>
    export default {
        name: "PostTitle",
        props: {
            title: {
                type: String,
                required: true,
            }
        }
    }
</script>

<style scoped>
    h4 {
        font-family: system-ui;
        background-color: #fafafa;
        box-shadow: #fbfbfb;
    }
    a:hover {
        text-decoration: none;
    }

</style>