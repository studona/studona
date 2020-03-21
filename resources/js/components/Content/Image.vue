<template>
    <div>
      <img src="{{ url }}" />
      <p>{{ description }}</p>
    </div>
</template>

<script>
    export default {
        name: 'Image',

        props: [
          'url',
          'description'
        ]
    }
</script>