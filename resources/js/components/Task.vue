<template>
    <div class="task-list-item flex">
        <div class="sm:w-1/6 md:w-1/12"><span class="subject">{{subject}}</span></div>
        <div class="sm:w-5/6 md:w-11/12 title">
            {{ title }}
            <div class="text-right font-bold">{{completed ? "100%" : "50%"}}</div>
            <div class="progress-bar" v-if="!completed">
                <div class="progress" style="width: 50%"></div>
            </div>
            <div class="progress-bar" v-else>
                <div class="finished" style="width: 100%"></div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Task",
        props: {
            completed: false,
            subject: "",
            title: ""
        }
    }
</script>