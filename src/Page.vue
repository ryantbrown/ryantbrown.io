<template>
  <div class="bg-white min-h-screen">
    <main style="min-height: calc(100vh - 120px)">
      <PageHeader />
      <!-- Contact Section -->
      <div class="relative bg-white" style="min-height: calc(100vh - 520px)">
        <MainImage />
        <div class="grid">
          <div class="lg:pr-8">
            <div class="max-w-md mx-auto sm:max-w-lg lg:mx-0">
              <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">
                Get in Touch
              </h2>
              <ContactLinks />
            </div>
          </div>
        </div>
      </div>
    </main>
    <PageFooter />
  </div>
</template>
<script setup lang="ts">
import PageHeader from "./components/PageHeader.vue";
import PageFooter from "./components/PageFooter.vue";
import MainImage from "./components/MainImage.vue";
import ContactLinks from "./components/ContactLinks.vue";
</script>
<style lang="postcss">
.grid {
  @apply relative py-16 px-4 sm:py-24 sm:px-6 lg:px-8 lg:max-w-7xl lg:mx-auto lg:py-32 lg:grid lg:grid-cols-2;
}
</style>
