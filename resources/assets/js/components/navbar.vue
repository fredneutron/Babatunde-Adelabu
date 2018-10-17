<template>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
        <div class="container">
            <a class="navbar-brand logo" v-bind:href="navigation[0].url">{{ topic }}</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse"
                 id="navbarNav">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation" v-for="nav in navigation" v-bind:key="nav.key">
                        <a class="nav-link active" v-bind:href="nav.url">{{ nav.name }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
    export default {
        name: "navbar",
        props: {
            topic: {
                type: String,
                required: true
            },
            navigation: {
                type: Array,
                required: true
            }
        }
    }
</script>

<style scoped>

</style>