<style>

</style>
<template>
  <div class="editor">
    <tinymce id="editor" 
        v-model="value" 
        :content='content' 
        :options='options' 
        @change="changed"></tinymce>
  </div>
</template>

<script>
import Vue from 'vue';
  export default {
    data () {
      return {
        value: 'Text to bind',
        content: '',
        options: {}
      }
    },
    methods: {
      changed (editor, content) {}
    }
  }
</script>

