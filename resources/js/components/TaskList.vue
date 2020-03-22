<template>
    <div class="task-list">
        <h2>Tasks</h2>
        <ul class="flex">
            <li class="flex-1 text-left">
                <a class="text-gray-400 uppercase hover:text-gray-100" v-on:click.stop.prevent="showOpen" href="#">Ausstehend</a>
            </li>
            <li class="flex-1 text-center">
                <a class="text-gray-400 uppercase hover:text-gray-100"  v-on:click.stop.prevent="showDone" href="#">Erledigt</a>
            </li>
            <li class="flex-1 text-right">
                <a class="text-gray-400 uppercase hover:text-gray-100" href="#">Optional</a>
            </li>
        </ul>

        <div class="fa-3x" v-if="loading">
            <i class="fas fa-spinner fa-spin"></i>
        </div>
        <div v-if="!errors.length">
            <div class="mt-4 bg-gray-100 border border-gray-400 text-gray-700 px-4 py-3 rounded relative" role="alert" v-if="!loading && tasks && tasks.length===0">
                <strong class="font-bold">Keine offenen Aufgaben!</strong>
                <span class="block sm:inline">Sehr gut, du hast alle Aufgaben bearbeitet.</span>
            </div>
            <div v-if="tasks && tasks.length">
                <div class="task-list-item flex" v-for="task in filteredTasks" :key="task.name">
                    <div class="sm:w-1/6 md:w-1/12"><span class="subject">Fach</span></div>
                    <div class="sm:w-5/6 md:w-11/12 title">
                        {{ task.title }}
                        <div class="text-right font-bold">{{task.completed ? "100%" : "50%"}}</div>
                        <div class="progress-bar" v-if="!task.completed">
                            <div class="progress" style="width: 50%"></div>
                        </div>
                        <div class="progress-bar" v-else>
                            <div class="finished" style="width: 100%"></div>
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
                }
            }
        },
        methods: {
            showOpen: function() {
                this.type = "open";
            },
            showDone: function() {
                this.type = "done";
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