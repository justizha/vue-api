import LoginFormVue from '@/views/Auth/LoginForm.vue';
import RegisterFormVue from '@/views/Auth/RegisterForm.vue';
import ProductsIndex from '@/views/Products/ProductsIndex.vue';
import UserCreateVue from '@/views/User/UserCreate.vue';
import UserDetail from '@/views/User/UserDetail.vue';
import UserListVue from '@/views/User/UserList.vue';

import { createRouter, createWebHistory } from 'vue-router';

const routes = [
  {path: '/user',name : 'UserList',component: UserListVue},
  {path: '/user/:id', name: 'UserDetail', component: UserDetail},
  {path: '/user/create',name: 'UserCreate', component: UserCreateVue},
  {path: '/products', name: 'Products', component : ProductsIndex},
  {path: '/login', name: 'Login', component : LoginFormVue},
  {path: '/register,', name : 'Register', component : RegisterFormVue}
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router;
