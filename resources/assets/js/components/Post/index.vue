<template>
    <main class="page hire-me-page">
        <section class="portfolio-block hire-me">
            <div class="container">
                <post-title :title="article.title" />
                <hr>
                <div class="row">
                    <post-body :post="article.body"></post-body>
                    <post-tags v-if="article.tags" :tags="article.tags" ></post-tags>
                    <div class="col-lg-8 offset-lg-2" style="margin-top: 30px">
                        <h5 style="color:rgb(170,171,173);"><strong>Responses</strong></h5>
                        <form data-aos="slide-left" data-aos-delay="50" data-aos-once="true" id="real">
                            <div class="form-group" v-if="show">
                                <label>Name</label>
                                <input
                                        class="form-control"
                                        type="text"
                                        name="name"
                                        required=""
                                        placeholder="Name"
                                        :autofocus="show"
                                        style="margin-bottom:10px;"
                                >
                                <label>Response</label>
                                <textarea
                                        class="form-control form-control-lg"
                                        rows="4"
                                        name="comment"
                                        required=""
                                        placeholder="Response..."
                                        autofocus=""
                                ></textarea>
                                <button
                                        class="btn btn-outline-primary"
                                        type="button"
                                        style="margin-top:25px;"
                                >Publish</button>
                            </div>
                            <div class="form-group" v-else-if="!show">
                            <textarea
                                    class="form-control"
                                    @click="show = !show"
                                    @mouseover="show = !show"
                                    placeholder="Write a response..."

                            ></textarea>
                            </div>
                            <comments />
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
</template>

<script>
    export default {
        name: "Post",
        props: {
            article: {
                type: Object,
                required: true,
            }
        },
        data: () => {
          return {
              show: false,
          }
        },
        created() {
            let real = document.getElementById('real');
            window.onclick = e => {
                if (e.target !== real) {
                    this.show = false;
                }
            }
        }
    }
</script>

<style scoped>
    textarea {
        resize: none;
    }
</style>