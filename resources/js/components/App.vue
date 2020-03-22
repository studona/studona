<template>
    <div>
        <!-- Main block -->
        <main>
            <select v-model="$i18n.locale">
                <option v-for="(lang, i) in langs" :key="`Lang${i}`" :value="lang">{{ lang }}</option>
            </select>
            <!-- Content -->
            <router-view class="content"></router-view>
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
                langs: ['de', 'en'],
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