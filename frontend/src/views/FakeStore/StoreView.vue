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
  <section class="mx-2">
    <div class="py-20 grid grid-cols-5 gap-2">
      <div class="grid grid-cols-2" v-for="product in products" :key="product.id">
        <h1 class="text-white truncate">{{ product.title }}</h1>
      </div>
    </div>
  </section>
</template>
