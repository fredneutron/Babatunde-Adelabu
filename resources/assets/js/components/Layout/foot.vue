<template>
    <footer class="page-footer">
        <div class="container">
            <div class="links">
                <a
                        v-for="(item, index) in nav"
                        :key="index"
                        :index="index"
                        :href="item.url"
                >{{ item.name }}</a>
            </div>
            <div class="social-icons">
                <a
                        v-if="typeof social['linked-in'][0] !== 'undefined'"
                        :href="social['linked-in'][0].url"
                >
                    <i class="icon ion-social-linkedin"></i>
                </a>
                <a
                        v-if="social['facebook'][0] !== 'undefined'"
                        :href="social.facebook[0].url"
                >
                    <i class="icon ion-social-facebook"></i>
                </a>
                <a
                        v-if="typeof social['twitter'][0] !== 'undefined'"
                        :href="social.twitter[0].url"
                >
                    <i class="icon ion-social-twitter"></i>
                </a>
                <a
                        v-if="typeof social['github'][0] !== 'undefined'"
                        :href="social.github[0].url"
                >
                    <i class="icon ion-social-github"></i>
                </a>
                <a
                        v-if="typeof social['instagram'][0] !== 'undefined'"
                        :href="social.instagram[0].url"
                >
                    <i class="icon ion-social-instagram"></i>
                </a>
            </div>
            <p>{{ new Date().getFullYear() }} &copy copyright | Handcrafted by <a :href="owner.url">{{ owner.name}}</a></p>
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
        },
    }
</script>

<style scoped>

</style>