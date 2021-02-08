<template>
    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" :href="'/'">Vue-Blade</a>

            <div class="mx-auto" >
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <router-link :to="{name:'index'}"  class="nav-link">
                            Home <span class="sr-only">(current)</span>
                        </router-link>
                    </li>
                    <li class="nav-item">

                        <router-link :to="{name:'create'}"  class="nav-link">
                            Create Blog
                        </router-link>

                    </li>
                </ul>

            </div>
        </nav>
    </header>

</template>

<script>
export default {
    name: "Navigation"
}
</script>

<style scoped>

</style>
