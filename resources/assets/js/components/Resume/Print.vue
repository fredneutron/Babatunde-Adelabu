<template>
    <div class="Print group">
        <div class="heading">
            <button
                    class="btn btn-outline-primary"
                    v-on:click.prevent="print"
                    type="button"
            >
                <i class="icon ion-ios-printer icon"></i>
                {{ text }}
            </button>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Print",
        data: () => {
          return {
              text: 'Print',
          }
        },
        methods: {
            print: function () {
                // print resume
                return window.print();
            }
        }
    }
</script>

<style scoped>

</style>