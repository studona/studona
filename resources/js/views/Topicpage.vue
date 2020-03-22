<template>
    <div>
        <!-- Main block -->
        <main>
            <!-- Content -->
            <div class="page-header orange" id="topic_title">
                <h1> Topic </h1>
            </div>

            <div class="card white" id="topic_explanation">
                <h2>Explanation</h2>
                This is the text for the explanation of the topic.
            </div>

            <div class="card blue" id="topic_resources">
                <h2>Resources</h2>
                Here is the space for the resources of the learning e.g. videos etc.
            </div>

            <div class="card white" id="topic_preconditions">
                <h2>References</h2>
                Here we can see the preconditions.
            </div>

            <div class="card blue" id="topic_tasks">
                <h2>Tasks</h2>
                The space for the tasks.
            </div>

            <div class="card blue">
                <h2>{{ $t('actions.rate') }}</h2>
            </div>
        </main>
    </div>
</template>

<script>
    export default {
        name: "topicpage",
        components: {
        }
    }
</script>

<style scoped>
</style>
