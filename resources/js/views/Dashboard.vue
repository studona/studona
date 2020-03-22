<template>
    <div>
        <div class="page-header white">
            <h1>{{ $t('views.dashboard') }}</h1>
        </div>

        <div class="card orange">
            <TaskList></TaskList>
        </div>

        <div class="card blue">
            <h2>{{ $t('models.interactions') }}</h2>
            <div class="mt-4 bg-gray-100 border border-gray-400 text-gray-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Keine Nachrichten!</strong>
                <span class="block sm:inline">Stelle Fragen oder hacke noch mal nach, falls du auf Antworten wartest.</span>
            </div>
            <InteractionList></InteractionList>
        </div>
    </div>
</template>

<script>
    import InteractionList from '../components/InteractionList';
    import TaskList from '../components/TaskList';

    export default {
        name: 'Dashboard',

        components: {
            InteractionList,
            TaskList
        },

        mounted () {
            axios
                .get('http://localhost:8000/api/tasks.json')
                .then(response => (this.info = response.data.bpi))
        }
    }
</script>