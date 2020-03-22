<template>
    <div>
        <h2>Fülle den Text mit den Optionen am rechten Rand</h2>

        <div class="flex">
            <div class="w-3/4">
                {{ text.replace(/_/g, '_______') }}
            </div>
            <div class="w-1/4">
                <ul class="options ml-2">
                    <li class="font-bold" v-for="option in options">{{ option }}</li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                text: 'Eine _ entstand, wenn sich die _ zu einer Gruppe  zusammenschlossen, um die Wahrung ihrer gemeinsamen Interessen zu sichern. Im Gegensatz dazu ist eine Gilde der Zusammenschluss von _. Zünfte hatten ihren Sitz in größeren Orten oder dort, wo eine bestimmte _ besonders häufig anzutreffen war. Deshalb haben die Zünfte ihre Anfänge auch erst im Hochmittelalter, da erst dann viele neue _ entstanden, in denen sich die Berufsgruppen entwickelten. Jeder Handwerker in der mittelalterlichen Stadt musste _ einer Zunft sein, um seinen Beruf ausüben zu können.',
                options: ['Kaufleuten', 'Zunft', 'Berufsgruppe', 'Städte', 'Handwerker', 'Mitglied']
            }
        }
    }
</script>

<style scoped>
    h3 {
        border-bottom: 1px solid white;
        margin-bottom: 10px;
    }

    ul.options {
        list-style: none;
    }
</style>