<script setup lang="ts">
import { useFetch } from '../composables/fetch';

const { data, error } = useFetch('/api', true);
</script>

<template>
  <div v-if="error">{{ error }}</div>
  <div v-if="data">
    <ul v-for="item in data">
      <li>{{ item }}</li>
    </ul>
  </div>
  <div v-else>...loading</div>
</template>
