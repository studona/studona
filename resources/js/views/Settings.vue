<template>
    <div>
        <div class="page-header white">
            <h1>Einstellungen</h1>
        </div>

        <div class="card orange">
            <SettingsForm></SettingsForm>
        </div>
    </div>
</template>

<script>
    import SettingsForm from "../components/Form/SettingsForm";

    export default {
        name: 'Settings',

        components: {
            SettingsForm,
        }
    }
</script>
