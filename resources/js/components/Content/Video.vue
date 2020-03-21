<template>
    <div>
      <video src="{{ url }}" />
    </div>
</template>

<script>
    export default {
        name: 'Video',

        props: [
          'url'
        ]
    }
</script>