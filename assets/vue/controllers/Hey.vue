<script setup lang="ts">
import Data from './Data.vue';
import { ref } from 'vue';

defineProps({
  test: String,
});

const showData = ref(false);

</script>

<template>
  <div>This is a vue component</div>
  <div>Receiving data from controller as prop:</div>
  <div>{{ test }}</div>

  <button @click="showData =! showData">Click</button>

  <Data v-if="showData" />
</template>
