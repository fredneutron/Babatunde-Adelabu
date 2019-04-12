<template>
    <div class="social-icons">
        <a
                v-if="typeof isName(socials, 'linkedin') !== 'undefined'"
                :href="isName(socials, 'linkedin').url"
        >
            <i class="icon ion-social-linkedin"></i>
        </a>
        <a
                v-if="typeof isName(socials, 'facebook') !== 'undefined'"
                :href="isName(socials, 'facebook').url"
        >
            <i class="icon ion-social-facebook"></i>
        </a>
        <a
                v-if="typeof isName(socials, 'twitter') !== 'undefined'"
                :href="isName(socials, 'twitter').url"
        >
            <i class="icon ion-social-twitter"></i>
        </a>
        <a
                v-if="typeof isName(socials, 'github') !== 'undefined'"
                :href="isName(socials, 'github').url"
        >
            <i class="icon ion-social-github"></i>
        </a>
        <a
                v-if="typeof isName(socials, 'instragram') !== 'undefined'"
                :href="isName(socials, 'instragram').url"
        >
            <i class="icon ion-social-instagram"></i>
        </a>
    </div>
</template>

<script>
    export default {
        name: "FootSocial",
        props: {
            socials: {
                type: Array,
                required: true
            }
        },
        data: () => {
            return {
                isName: (array, name) => array.filter(i => i.name === name)[0],
            }
        }
    }
</script>

<style scoped>

</style>