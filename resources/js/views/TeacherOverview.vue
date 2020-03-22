<template>
    <div>
        <!-- Main block -->
        <main>
            <!-- Content -->
            <div class="page-header white" id="teacher_overview_title">
                <h1> Alle Aufgaben </h1>
            </div>

            <div class="card orange" id="teacher_overview_groups">
                <h2>{{ $t('models.groups') }}</h2>
                <button class="btn btn-blue" v-for="group in groups" :key="group.id">{{ group.name }}</button>
            </div>

            <div class="card blue" id="teacher_overview_subjects">
                <h2>{{ $t('models.subjects') }}</h2>

                <button class="btn btn-blue mr-2" v-for="subject in subjects" :key="subject.id">{{ subject.name }}</button>
            </div>
        </main>
    </div>
</template>

<script>
    import axios from "axios";
    import { mapState } from 'vuex'


    export default {
        name: "TeacherOverview",
        components: {
        },
        computed: mapState([
            'groups',
            'subjects'
        ]),
        mounted() {
            axios.get('/api/Group')
                .then(response => {
                    this.groups = response.data.data;
                })
                .catch(e => {
                    this.errors.push(e)
                });
        }
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
