<template>
    <div>
        <div class="page-header">
            <h1>{{ $t('views.dashboard') }}</h1>
        </div>

        <div class="card white">
            <h2>{{ $t('concepts.interactions') }}</h2>
            <InteractionList></InteractionList>
        </div>

        <div class="card blue">
            <h2>{{ $t('concepts.tasks') }}</h2>
            <TaskList></TaskList>
        </div>

        <div class="card orange">
            <h2>{{ $t('actions.rate') }}</h2>
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
        }
    }
</script>