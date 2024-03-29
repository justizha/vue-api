import LoginFormVue from '@/views/Auth/LoginForm.vue'
import RegisterFormVue from '@/views/Auth/RegisterForm.vue'
import IndexProductVue from '@/views/Products/IndexProduct.vue'
import UserCreateVue from '@/views/User/UserCreate.vue'
import UserDetail from '@/views/User/UserDetail.vue'
import UserListVue from '@/views/User/UserList.vue'
import HomeIndexVue from '@/views/Home/HomeIndex.vue'
import UserEditVue from '@/views/User/UserEdit.vue'
import StoreView from '@/views/FakeStore/StoreView.vue'

import { createRouter, createWebHistory } from 'vue-router'

const routes = [
  { path: '/', name: 'HomeIndex', component: HomeIndexVue },
  { path: '/user', name: 'UserList', component: UserListVue },
  { path: '/user/:id', name: 'UserDetail', component: UserDetail },
  { path: '/user/create', name: 'UserCreate', component: UserCreateVue },
  { path: '/login', name: 'Login', component: LoginFormVue },
  { path: '/register,', name: 'Register', component: RegisterFormVue },
  { path: '/products', name: 'Products', component: IndexProductVue },
  { path: '/user/edit/:id', name: 'UserEdit', component: UserEditVue },
  { path: '/store', name: 'StoreView', component: StoreView }
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router
