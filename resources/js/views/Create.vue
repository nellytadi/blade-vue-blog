<template>

    <main role="main" class="flex-shrink-0 mb-5 ">
        <div class="container">
            <form v-on:submit.prevent="submitBlog()" v-model="Form">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" v-model="Form.title" placeholder="Blog Title">
                </div>
                <div class="form-group">
                    <label>Author</label>
                    <input type="text" class="form-control" name="author" v-model="Form.author" placeholder="Author">
                </div>
                <div class="form-group">
                    <label>Blog post</label>
                    <textarea class="form-control" name="blog" v-model="Form.blog" rows="10"></textarea>
                </div>

                <button type="submit" class="btn btn-primary mb-2">Publish</button>
            </form>
        </div>
    </main>
</template>

<script>
import Navigation from "../components/Navigation";
export default {
    name: "Create",
    components: {Navigation},
    data(){
      return {
          Form:{
              title:'',
              author:'',
              blog:''
          }
      }
    },
    methods:{
        submitBlog(){
            axios.post('/store',this.Form)
                .then(response => { alert(response.data.status), this.emptyForm() })
        },
        emptyForm(){
            let data = this.Form
            for(let field in data){
                if (data.hasOwnProperty(field)){
                     data[field] = null;
                }
            }
        }
    }

}
</script>

<style scoped>

</style>
