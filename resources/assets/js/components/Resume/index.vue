<template>
    <main class="page cv-page">

        <!-- Biography
             pass registered user's biography to bio -->
        <bio :bio="bio"
             :link="advert.link"
             :statement="advert.statement"
             :cv="advert.cv"
        ></bio>

        <section class="portfolio-block cv">
            <div class="container">

                <!-- setting up all work experience -->
                <work-experiences :works="works"
                ></work-experiences>

                <!-- setting up all education background -->
                <educations :educations="educations"
                ></educations>

                <!-- setting up all skills set -->
                <skills :skills="skills"
                ></skills>

                <!-- setting up hobbies -->
                <hobbies :hobbies="hobbies"
                ></hobbies>

                <!-- print resume -->
                <print></print>
            </div>
        </section>
    </main>
</template>

<script>
    export default {
        name: "Resume",
        props: {
            advert: {
                type: Object,
                required: true,
            },
            bio: {
                type: Object,
                required: true,
            },
            educations: {
                type: Array,
                required: true,
            },
            hobbies: {
                type: String,
                required: true,
            },
            skills: {
                type: Array,
                required: true,
            },
            works: {
                type: Array,
                required: true,
            }

        }
    }
</script>

<style scoped>

</style>