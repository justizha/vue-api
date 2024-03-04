<script setup></script>

<template>
  <section class="relative mx-auto py-24">
    <div class="flex justify-center">
      <div class="w-full grid grid-cols-1 gap-2 text-center max-w-2xl">
        <router-link
          to="/user"
          class="border bg-transparent border-blue-700 from-blue-800/30 via-blue-700 to-blue-600 p-1 rounded font-medium text-white hover:bg-gradient-to-l transition-all duration-300"
        >
          User View
        </router-link>
        <router-link
          to="/products"
          class="border bg-transparent border-blue-700 from-blue-800/30 via-blue-700 to-blue-600 p-1 rounded font-medium text-white hover:bg-gradient-to-l transition-all duration-300"
        >
          Product View
        </router-link>
        <router-link
          to="/notyet"
          class="border bg-transparent border-blue-700 from-blue-800/30 via-blue-700 to-blue-600 p-1 rounded font-medium text-white hover:bg-gradient-to-l transition-all duration-300"
        >
          Fake Store (Soon)
        </router-link>
        <router-link
          to="/notyet"
          class="border bg-transparent border-blue-700 from-blue-800/30 via-blue-700 to-blue-600 p-1 rounded font-medium text-white hover:bg-gradient-to-l transition-all duration-300"
        >
          Relation (Soon)
        </router-link>
      </div>
    </div>
  </section>
</template>
