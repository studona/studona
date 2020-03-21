<template>
    <div>
        <!-- Main block -->
        <main>
            <!-- Content -->
            <div id="topic_title">Topictitle</div>
            <div id="topic_explanation">This is the text for the explanation of the topic.</div>
            <div id="topic_resources">Here is the space for the resources of the learning e.g. videos etc.</div>
            <div id="topic_preconditions">Here we can see the preconditions.</div>
            <div id="topic_tasks">The space for the tasks.</div>
        </main>
    </div>
</template>

<script>
    export default {
        name: "topicpage",
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
