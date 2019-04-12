<template>
    <div class="links">
        <a
                v-for="(item, index) in nav"
                :key="index"
                :index="index"
                :href="item.url"
        >{{ item.name }}</a>
    </div>
</template>

<script>
    export default {
        name: "FootLinks",
        props: {
            nav: {
                type: Array,
                required: true
            }
        }
    }
</script>

<style scoped>

</style>