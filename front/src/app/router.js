import { createRouter, createWebHashHistory } from 'vue-router';
import index from '@/pages';
import feedbacks from '@/pages';

const routes = [
  { path: '/', component: index },
  { path: '/feedbacks', component: feedbacks },
];

const router = createRouter({
  history: createWebHashHistory(),
  routes,
});

export default router;
