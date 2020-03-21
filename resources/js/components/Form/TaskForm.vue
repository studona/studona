<template>
    <form>
        <div class="input-group">
            <label>{{ $t('models.attributes.task.title') }}</label>
            <input v-model="task.title" />
        </div>

        <div class="input-group">
            <label>{{ $t('models.attributes.task.description') }}</label>
            <textarea v-model="task.description"></textarea>
        </div>

        <div class="input-group">
            <label>{{ $t('models.attributes.task.due_until') }}</label>
            <input type="date" v-model="task.due_until" />
        </div>

        <button class="submit"><i class="fa fa-save"></i> {{ $t('actions.save') }}</button>
    </form>

</template>

<script>
    export default {
        name: 'TaskForm',

        data: function () {
            return {
                task: {
                    title: '',
                    description: '',
                    due_until: ''
                }
            }
        }
    }
</script>