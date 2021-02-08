<template>
    <main role="main" class="flex-shrink-0 ">
        <div class="container">

            <div class="card" v-for="blog in blogs">
                <div class="card-body">
                    <h5 class="card-title" v-text="blog.title"></h5>
                    <p class="card-subtitle mb-2 text-muted font-small"> {{blog.created_at| humanize}}</p>

                    <p class="card-text">{{ blog.blog | stripTags | stringLimit}} </p>

                    <p class="card-subtitle mb-3 text-muted font-small">Written by {{ blog.author }}

                    </p>
                    <router-link :to="'/show/'+blog.id" class="btn btn-primary">
                        Read more
                    </router-link>

                </div>
            </div>
        </div>
    </main>
</template>

<script>
import moment from 'moment';

export default {
    name: "Welcome",
    data(){
        return {
         blogs:{}
        }
    },
    created() {
        axios.get('/blogs').then(response => this.blogs = response.data.data)
    },
    // filters are simple methods you pass data through
    filters:{
        humanize(value){
            return moment(value).fromNow();
        },
        stripTags(value){
            return value.replace(/(<([^>]+)>)/gi, "");
        },
        stringLimit(value){
          return value.substring(0,250) + '...'
        }
    }
}
</script>

<style scoped>

</style>
