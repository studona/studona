<template>
    <div>
        <div class="page-header white">
            <h1>{{ $t('views.new_task') }}</h1>
        </div>

        <div class="card orange">
          <TaskForm></TaskForm>
        </div>
    </div>
</template>

<script>
    import TaskForm from '../components/Form/TaskForm';

    export default {
        name: 'NewTask',

        components: {
            TaskForm
        }
    }
</script>