<template>
    <main role="main" class="flex-shrink-0 mb-5 ">
        <div class="container">
            <div class="blog-post" v-model="blog">
                <h2 class="blog-post-title">{{blog.title}}</h2>
                <p class="blog-post-meta">{{blog.created_at| humanize}} by <b>{{blog.author}}</b></p>

                <div v-html="blog.blog"></div>

            </div>
        </div>
    </main>
</template>

<script>
import moment from "moment";

export default {
name: "Single",
    data(){
        return {
            blog:{}
        }
    },
    created() {
        axios.get('/blog/' + this.$route.params.id).then(response => this.blog = response.data.data)
    },
    filters:{
        humanize(value){
            return moment(value).fromNow();
        }
    }
}
</script>

<style scoped>

</style>
