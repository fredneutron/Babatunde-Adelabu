<template>
    <footer class="page-footer">
        <div class="container">
            <FootLinks v-if="nav" :nav="nav" />
            <foot-social v-if="social" :socials="social" />
            <p>{{ new Date().getFullYear() }} &copy copyright | Handcrafted by<a :href="owner.url"> {{ owner.name}}</a></p>
        </div>
    </footer>
</template>

<script>
    export default {
        name: "foot",
        props: {
            nav: {
                type: Array,
                required: true
            },
            social: {
                type: Array,
            }
        },
    }
</script>

<style scoped>

</style>