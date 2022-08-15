<template>
    <footer class="page-footer">
        <div class="container">
            <div class="links">
                <a v-for="nav in nav" v-bind:href="nav.url">{{ nav.name }}</a>
            </div>
            <div class="social-icons">
                <a v-if="typeof social['linked-in'][0] !== 'undefined'" v-bind:href="social['linked-in'][0].url"><i class="icon ion-social-linkedin"></i></a>
                <a v-if="typeof social['facebook'][0] !== 'undefined'" v-bind:href="social.facebook[0].url"><i class="icon ion-social-facebook"></i></a>
                <a v-if="typeof social['twitter'][0] !== 'undefined'" v-bind:href="social.twitter[0].url"><i class="icon ion-social-twitter"></i></a>
                <a v-if="typeof social['github'][0] !== 'undefined'" v-bind:href="social.github[0].url"><i class="icon ion-social-github"></i></a>
                <a v-if="typeof social['instagram'][0] !== 'undefined'" v-bind:href="social.instagram[0].url"><i class="icon ion-social-instagram"></i></a>
            </div>
            <p>{{ new Date().getFullYear() }} &copy copyright | Handcrafted by<a href="/.">Babatunde Adelabu</a></p>
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
                type: Object,
                required: true
            }
        }
    }
</script>

<style scoped>

</style>
