<template>
  <nav class="py-5 shadow border-b dark:border-gray-800 w-full flex justify-between bg-transparent items-center px-4">
    <h1 class="text-2xl font-bold dark:text-white">
      <router-link to="/">Vue</router-link>
    </h1>
    <ul class="flex gap-3 dark:text-white">
      <li>
        <router-link to="/user"> User </router-link>
      </li>
      <li>
        <router-link to="/product">Product </router-link>
      </li>
      <li>
        <router-link to="/store">Fake Store </router-link>
      </li>
      <li>
        <router-link to="/login"> Login </router-link>
      </li>
    </ul>
  </nav>
</template>
