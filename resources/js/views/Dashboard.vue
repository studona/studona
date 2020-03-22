<template>
    <div>
        <div class="page-header white">
            <h1>{{ $t('views.dashboard') }}</h1>
        </div>

        <div class="card orange">
            <h2>{{ $t('models.tasks') }}</h2>
            <ul class="flex">
                <li class="flex-1 text-left">
                    <a class="text-gray-400 uppercase hover:text-gray-100" href="#">Ausstehend</a>
                </li>
                <li class="flex-1 text-center">
                    <a class="text-gray-400 uppercase hover:text-gray-100" href="#">Erledigt</a>
                </li>
                <li class="flex-1 text-right">
                    <a class="text-gray-400 uppercase hover:text-gray-100" href="#">Optional</a>
                </li>
            </ul>

        <div class="card white">
            <h2>{{ $t('concepts.interactions') }}</h2>
            <div class="mt-4 bg-gray-100 border border-gray-400 text-gray-700 px-4 py-3 rounded" role="alert">
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