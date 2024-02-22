import UserCreateVue from '@/views/User/UserCreate.vue';
import UserDetail from '@/views/User/UserDetail.vue';
import UserListVue from '@/views/User/UserList.vue';
import ProductsIndex from '@/views/Products/ProductsIndex.vue';

import { createRouter, createWebHistory } from 'vue-router';

const routes = [
  {path: '/user',name : 'UserList',component: UserListVue},
  {path: '/user/:id', name: 'UserDetail', component: UserDetail},
  {path: '/user/create',name: 'UserCreate', component: UserCreateVue},
  {path: '/products', name: 'Products', component : ProductsIndex}
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router;
