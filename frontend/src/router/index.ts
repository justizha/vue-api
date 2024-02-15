import UserDetail from '@/views/User/UserDetail.vue'; // Import your UserDetail component
import UserListVue from '@/views/User/UserList.vue';
import { createRouter, createWebHistory } from 'vue-router';
const routes = [
  {
    path: '/user',
    name : 'UserList',
    component: UserListVue
  },
  {
    path: '/user/:id', 
    name: 'UserDetail',
    component: UserDetail 
  }
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router;
