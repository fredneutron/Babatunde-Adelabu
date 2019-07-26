<template>
    <div class="comments">
        <comment v-for="(comment, index) in comments" :key="index" :name="comment.name" :body="comment.body" />
    </div>
</template>

<script>
    export default {
        name: "Comments",
        data: () => {
            return {
                comments: [
                    {
                        name: "Name",
                        body: "A frontend web design that is accessible across all platform and fit into all devices without a break in design, giving you a simple all time easy to use Web application"
                    },
                ],
            };
        }
    }
</script>

<style scoped>
    .comments {
        margin-top: 30px;
    }
</style>