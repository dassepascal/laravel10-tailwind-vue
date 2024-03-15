<script setup>
import { ref } from 'vue'

const counter = ref(0)
</script>

<template>
    <h1 class="text-2xl font-bold">Increment Counter</h1>
  <button
    type="button"
    @click="counter++"
    class="p-2 text-white bg-gray-500 rounded"
  >
    Counter is: {{ counter }}
  </button>
</template>
