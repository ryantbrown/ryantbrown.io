<template>
    <div
        class="relative lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2"
        v-show="curImage">
        <img
            ref="mainImage"
            class="ci h-56 w-full object-cover lg:absolute lg:h-full"
            :src="`/src/assets/main/${curImage}.jpg`"
            alt="Build" />
    </div>
</template>
<script setup lang="ts">
    import { ref } from 'vue';
    const curImage = ref(1);
    const mainImage = ref(null);
    const total = 5;

    const swapItem = () => {
        mainImage.value.classList.toggle('opacity-');
        curImage.value += 1;

        if (curImage.value >= total) {
            curImage.value = 1;
        }
        setTimeout(() => mainImage.value.classList.toggle('opacity-0'), 100);
    };

    setInterval(() => swapItem(), 2000);
</script>
<style lang="postcss">
    .list-fade-enter,
    .list-fade-leave-to {
        @apply opacity-0;
    }
    .list-fade-leave-active {
        @apply absolute;
    }

    .ci {
        transition: all 0.25s ease;
        @apply absolute mx-auto;
    }
</style>
