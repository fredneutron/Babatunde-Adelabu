<template>
    <main class="page lanidng-page">
<!--         biography-->
<!--         pass registered user's biography to bio-->
        <Bio
                :bio="bio"
                :link="advert.link"
                :statement="advert.statement"
                :cv="advert.cv"
        ></Bio>

<!--        this is for advertising projects-->
<!--        select all registered projects from database and pass it to advertise-content-->
        <project-ad
                :projects="pickRandom(projects, 3)"
        ></project-ad>

<!--        this is for advertise contact-->
        <ad-link
                :ad="advert"
        ></ad-link>

<!--        this is for tech advert-->
        <skills-ad
                :frontend="technologyType.frontend"
                :backend="technologyType.backend"
                :security="technologyType.security"
        ></skills-ad>

<!--        select all registered project in database and pass it to projects-->
        <project-view
                :project="pickRandom(projects, 1)[0]"
        ></project-view>

    </main>
</template>

<script>
    export default {
        name: "Home",
        props: {
            advert: {
                type: Object,
                required: true,
            },
            bio: {
                type: Object,
                required: true,
            },
            projects: {
                type: Array,
                required: true,
            },
            technologyType: {
                type: Object,
                required: true,
            }
        },
        data: () => {
            return {
                pickRandom: (array, num) => array.sort(() => 0.5 - Math.random()).slice(0, num),
            }
        }
    }
</script>

<style scoped>

</style>