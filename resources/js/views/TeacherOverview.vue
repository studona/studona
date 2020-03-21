<template>
    <div>
        <!-- Main block -->
        <main>
            <!-- Content -->
            <div class="page-header white" id="teacher_overview_title">
                <h1> Alle Aufgaben </h1>
            </div>

            <div class="card blue" id="teacher_overview_groups">
                <h2>Gruppen</h2>
                <!-- 2 Dummy-Buttons -->
                <button class="btn btn-blue" id="testButton 1">
                    5
                </button>
                <button class="btn btn-blue" id="testButton 2">
                    6
                </button>
                <button class="btn btn-blue" v-for="group in groups" :key="group.id">
                    {{group.name}}
                </button>
            </div>

            <div class="card blue" id="teacher_overview_subjects">
                <h2>Fächer</h2>
                Here is the space for the collapsibles for each subject.
            </div>
        </main>
    </div>
</template>

<script>
    export default {
        name: "TeacherOverview",
        components: {
        },
        props: [
            'groups'
        ]
    }
</script>

<style scoped>
    .btn {
        @apply font-bold py-2 px-4 rounded;
    }
    .btn-blue {
        @apply bg-transparent text-white border border-white;
    }
    .btn-blue:hover {
        @apply bg-blue-700;
    }
</style>
