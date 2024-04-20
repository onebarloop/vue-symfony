<template>
    <div>XXX {{ name }}!</div>
    <div>{{ number }}</div>
</template>

<script setup>
    defineProps({
        name: String,
        number: Number
    });
</script>
