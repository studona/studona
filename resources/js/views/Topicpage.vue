<template>
    <div>
        <!-- Main block -->
        <main>
            <!-- Content -->
            <div class="page-header violet" id="topic_title">
                <h1> Induktion </h1>
                <h2> Physik, Klasse 7 </h2>
            </div>

            <div class="card white" id="topic_explanation">
                <h2>Erklärung</h2>
                <p>Die elektromagnetische Induktion ist ein Vorgang, bei dem durch Bewegung eines elektrischen Leiters
                im Magnetfeld oder durch Änderung des von einem Leiter umschlossenen Magnetfeldes eine elektrische
                Spannung und ein Stromfluss erzeigt werden.</p>
            </div>

            <div class="card violet" id="topic_resources">
                <h2>Material zum Thema</h2>
                <div class="mt-4 bg-gray-100 border border-gray-400 text-gray-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Kein Material!</strong>
                    <span class="block sm:inline">Bisher ist kein Material zu diesem Thema hinterlegt.</span>
                </div>
            </div>

            <div class="card white" id="topic_preconditions">
                <h2>Voraussetzungen</h2>
                <button class="btn btn-red">Magnetismus I</button>
                <button class="btn btn-red">Das magnetische Feld</button>
                <button class="btn btn-white">Formeln umstellen</button>
            </div>

            <div class="card violet" id="topic_tasks">
                <h2>Aufgaben</h2>
                <div class="mt-4 bg-gray-100 border border-gray-400 text-gray-700 px-4 py-3 rounded relative" role="alert">
                    <!--<strong class="font-bold">Keine Aufgaben!</strong>
                    <span class="block sm:inline">Bisher sind keine Aufgaben zu diesem Thema hinterlegt.</span>-->
                    <FillInTheBlankText></FillInTheBlankText>
                </div>
            </div>

            <div class="card red">
                <h2>{{ $t('actions.rate') }}</h2>
                <span class="block sm:inline">
                    <div class="stern" style="float:left;margin:5px;"></div>
                    <div class="stern" style="float:left;margin:5px;"></div>
                    <div class="stern" style="float:left;margin:5px;"></div>
                    <div class="stern" style="float:left;margin:5px;"></div>
                    <div class="stern" style="float:left;margin:5px;"></div>
                </span>
            </div>
        </main>
    </div>
</template>

<script>
    import FillInTheBlankText from "../components/Content/FillInTheBlankText";

    export default {
        name: "topicpage",
        components: {
            FillInTheBlankText,
        }
    }
</script>

<style scoped>
    .btn {
        @apply font-bold py-2 px-4 rounded;
    }
    .btn-red {
        @apply bg-red-500 text-white border border-white;
    }
    .btn-red:hover {
        @apply bg-red-700;
    }
    .btn-white {
        @apply bg-transparent text-red-500 border border-red-500;
    }
    .btn-white:hover {
        @apply bg-red-700;
    }

    div.stern {
        width: 0;
        height: 0;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-bottom: 20px solid #ffc800;
        position: relative;
    }

    div.stern:after {
        width: 0;
        height: 0;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-top: 20px solid #ffc800;
        position: absolute;
        content: "";
        top: 7px;
        left: -10px;
    }
</style>
