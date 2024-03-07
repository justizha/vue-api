<script lang="ts">
export default {
  name: 'StoreView',
  data() {
    return {
      products: []
    }
  },
  mounted() {
    this.fetchProducts()
  },
  methods: {
    fetchProducts() {
      fetch('https://fakestoreapi.com/products')
        .then((res) => res.json())
        .then((data) => (this.products = data))
        .catch((err) => console.error('Something went wrong :', err))
    }
  }
}
</script>
<template>
  <section class="mx-auto flex justify-center">
    <article class="py-20 grid  md:grid-cols-3 grid-cols-1 gap-3 px-12">
      <div v-for="product in products" :key="product.id">
        <div
          class="p-3 shadow dark:border dark:border-slate-500 rounded-t-lg flex flex-col justify-end w-full max-w-md h-52"
          :style="{ backgroundImage: `url(${product.image})` }"
        ></div>
        <div class="dark:bg-slate-800 w-full max-w-md dark:text-white p-2 rounded-b h-52">
          <h1 class="font-medium text-lg md:text-xl mb-2">
            {{ product.title }}
          </h1>
          <p class="truncate text-sm">
            {{ product.description }}
          </p>
        </div>
      </div>
    </article>
  </section>
</template>
