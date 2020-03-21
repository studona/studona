<template>
    <div>
        <h1>Dashboard</h1>

        <h2>Interaktionen</h2>
        <InteractionList></InteractionList>

        <h2>Aufgaben</h2>
        <TaskList></TaskList>
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