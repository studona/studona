<template>
    <div class="task-list">
        <h2>Tasks</h2>
        <ul class="flex">
            <li class="flex-1 text-left">
                <a class="text-gray-400 uppercase hover:text-gray-100" v-on:click.stop.prevent="type = 'open'" href="#">Ausstehend</a>
            </li>
            <li class="flex-1 text-center">
                <a class="text-gray-400 uppercase hover:text-gray-100"  v-on:click.stop.prevent="type = 'done'" href="#">Erledigt</a>
            </li>
            <li class="flex-1 text-right">
                <a class="text-gray-400 uppercase hover:text-gray-100" v-on:click.stop.prevent="type = 'optional'" href="#">Optional</a>
            </li>
        </ul>

        <div class="fa-3x" v-if="loading">
            <i class="fas fa-spinner fa-spin"></i>
        </div>
        <div v-if="!errors.length">
            <div class="mt-4 bg-gray-100 border border-gray-400 text-gray-700 px-4 py-3 rounded relative" role="alert" v-if="!loading && filteredTasks && filteredTasks.length===0">
                <strong class="font-bold">Keine Aufgaben!</strong>
            </div>
            <div v-if="filteredTasks && filteredTasks.length">
                <div class="task-list-item flex" v-for="task in filteredTasks" :key="task.name">
                    <Task v-bind:title="task.title" subject="Fach" v-bind:completed="task.completed" class="title"></Task>
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
    import Task from './Task';
    export default {
        components: {
            Task
        },
        data() {
            return {
                type: "open",
                loading: true,
                tasks: [],
                errors: []
            }
        },
        name: 'TaskList',
        computed: {
            openTasks: function() {
                return this.tasks.filter((task) => { return !task.completed});
            },
            finishedTasks: function() {
                return this.tasks.filter((task) => { return task.completed});
            },
            filteredTasks: function() {
                if(this.type === "open") {
                    return this.openTasks;
                } else if(this.type === "done") {
                    return this.finishedTasks;
                } else {
                    return [];
                }
            }
        },
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