<script setup>
import { ref } from 'vue';

defineProps({
  data: String,
});

const dataArray = ref(null);

async function fetchData() {
  const res = await fetch('/api');
  const data = await res.json();
  console.log(data);
  dataArray.value = data;
}
</script>

<template>
  <div>This is a vue component</div>
  <div>Receiving data from controller as prop:</div>
  <div>{{ data }}</div>
  <button @click="fetchData">Click</button>
  <ul v-for="item in dataArray">
    <li>{{ item }}</li>
  </ul>
</template>
