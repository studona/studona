<template>
    <div>
        <div class="fa-3x" v-if="loading">
            <i class="fas fa-spinner fa-spin"></i>
        </div>
        <div v-if="!errors.length">
            <div class="mt-4 bg-gray-100 border border-gray-400 text-gray-700 px-4 py-3 rounded relative" role="alert" v-if="!loading && tasks && tasks.length===0">
                <strong class="font-bold">Keine offenen Aufgaben!</strong>
                <span class="block sm:inline">Sehr gut, du hast alle Aufgaben bearbeitet.</span>
            </div>
            <div class="task-list" v-if="tasks && tasks.length">
            <div class="task-list-item flex" v-for="task in tasks" :key="task.name">
                <div class="sm:w-1/6 md:w-1/12"><span class="label">Fach</span></div>
                <div class="sm:w-5/6 md:w-11/12">
                    {{ task.title }}
                    <div class="text-right font-bold">50%</div>
                    <div class="progress-bar">
                        <div class="progress" style="width: 50%"></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <ul v-else>
            <li v-for="(error, index) in errors" :key="index">
                {{ error }}
            </li>
        </ul>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {

        data() {
            return {
                loading: true,
                tasks: [],
                errors: []
            }
        },
        name: 'TaskList',

        props: [
            'tasks'
        ],
        created() {
            axios.get(`http://jsonplaceholder.typicode.com/todos?userId=1`)
                .then(response => {
                this.tasks = response.data;
                this.loading = false;
            })
            .catch(e => {
                this.errors.push(e)
                this.loading = false;
            });
        }
    }
</script>