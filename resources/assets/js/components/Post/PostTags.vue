<template>
    <div class="col-lg-8 offset-lg-2" style="margin-top: 20px">
        <span>Tags:</span>
        <span
                v-for="(tag, index) in tags"
                :key="index"
        >
            {{' '}}
            <span class="badge badge-pill badge-light">{{ tag.name }}</span>
            {{'  '}}
        </span>
    </div>
</template>

<script>
    export default {
        name: "PostTags",
        props: {
            tags: {
                type: Array,
                required: true,
            }
        }
    }
</script>

<style scoped>

</style>