<template>
    <div>
        <ul>
            <li v-for="task in tasks" :key="task.name">
                {{ task.name }}
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        name: 'TaskList',

        props: [
            'tasks'
        ]
    }
</script>