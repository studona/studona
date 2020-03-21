<template>
    <div>
      <h3>{{ headline }}</h3>
      <div>{{ body }}</div>
    </div>
</template>

<script>
    export default {
        name: 'Text',

        props: [
          'headline',
          'body'
        ]
    }
</script>