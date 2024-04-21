<script setup lang="ts">
import { useFetch } from '../composables/fetch';

defineProps({
  data: String,
});

const { data, error } = useFetch('/api');
</script>

<template>
  <div>This is a vue component</div>
  <div>Receiving data from controller as prop:</div>
  <button>Click</button>
  <div v-if="error">{{ error }}</div>
  <div v-if="data">
    <ul v-for="item in data">
      <li>{{ item }}</li>
    </ul>
  </div>
  <div v-else>...</div>
</template>
