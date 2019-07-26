<template>
    <div
            class="alert alert-danger alert-dismissible"
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
        <b>Please correct the following error(s):</b>
        <ul>
            <li
                    v-for="(error, index) in errors"
                    :key="index"
                    :index="index"
            >{{ error }}</li>
        </ul>
    </div>
</template>

<script>
    export default {
        name: "FormError",
        props: {
            errors: {
                type: Array,
                required: true,
            }
        }
    }
</script>

<style scoped>

</style>