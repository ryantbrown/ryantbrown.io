<template>
    <a class="link" :href="link.url" target="_blank">{{ link.label }}</a>
</template>
<script setup lang="ts">
    defineProps<{
        link: { url: string; label: string };
    }>();
</script>
