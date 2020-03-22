<template>
    <form>
        <div class="input-group">
            <label> Vorname </label>
            <input v-model="task.firstName" />
        </div>

        <div class="input-group">
            <label> Nachname </label>
            <input v-model="task.surname"/>
        </div>

        <div class="input-group">
            <label>Email</label>
            <input v-model="task.email" />
        </div>

        <div class="input-group">
            <label>Passwort</label>
            <input type="password" v-model="task.password" />
        </div>

        <button class="submit"><i class="fa fa-save"></i> {{ $t('actions.save') }}</button>
    </form>
</template>

<script>
    import {mapState} from "vuex";

    export default {
        name: "SettingsForm",

        computed: mapState([
            'subjects'
        ]),
        
        data: function () {
            return {
                task: {
                    firstName: '',
                    surname: '',
                    email: '',
                    password:'',
                }
            }
        }
    }
</script>

<style scoped>

</style>

