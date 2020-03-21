<template>
    <div>
        <div class="mt-4 bg-gray-100 border border-gray-400 text-gray-700 px-4 py-3 rounded relative" role="alert" v-if="!tasks || tasks && tasks.length===0">
            <strong class="font-bold">Keine offenen Aufgaben!</strong>
            <span class="block sm:inline">Sehr gut, du hast alle Aufgaben bearbeitet.</span>
        </div>
        <ul v-if="tasks && tasks.length">
            <li v-for="task in tasks" :key="task.name">
                {{ task.title }}
            </li>
        </ul>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {

        data() {
            return {
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
                this.tasks = response.data
            })
            .catch(e => {
                this.errors.push(e)
            });
        }
    }
</script>