<script>
import Nav from './components/Nav.vue'
import Items from './components/Items.vue'

export default {
    name: 'App',
    components: {
        Items, Nav
    }
}
</script>

<template>
    <main class="bg-gray-900 h-screen">
        <Nav />
        <section class="pt-20 mx-auto">
            <Items />
        </section>
    </main>
</template>

