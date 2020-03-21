<template>
    <div>
        <!-- Main block -->
        <main>
            <!-- Content -->
            <router-view class="content" :user="user"></router-view>
        </main>
    </div>
</template>

<script>
    export default {
        name: "App",
        components: {
        },
        created() {
            this.title = this.$route.meta.title;
        },
        data: function() {
            return {
                title: ''
            }
        },
        watch: {
            $route(to, from) {
                this.title = to.meta.title;
            },
            title() {
                document.title = this.title; 
            }
        }
    }
</script>

<style scoped>
</style>