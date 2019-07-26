<template>
    <div
            class="alert alert-success alert-dismissible"
            role="alert"
    >
        <button
                type="button"
                class="close"
                data-dismiss="alert"
                aria-label="Close"
        >
            <span aria-hidden="true">&times;</span>
        </button>
        <span>
                    <i class="icon ion-checkmark"></i>
                </span>
        <b>{{ response.code }}</b>
        <p>{{ response.message }}</p>
    </div>
</template>

<script>
    export default {
        name: "FormResponse",
        props: {
            response: {
                type: Object,
                required: true,
            }
        }
    }
</script>

<style scoped>

</style>