import { createApp } from 'vue'
import 'vue-router'
import { createRouter, createWebHistory } from 'vue-router'
import AppVue from './App.vue'
import './style.css'
import HomeVue from './views/Home.vue'
import LoginVue from './views/Login.vue'
import UserListVue from './views/UserList.vue'


const routes = [
    { path: '/', component: HomeVue },
    { path: '/login', component: LoginVue },
    { path: '/user-list', component: UserListVue },
]

const router = createRouter({
    history: createWebHistory(),
    routes

})

createApp(AppVue).use(router).mount('#app')
