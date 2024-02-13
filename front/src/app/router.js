import { createRouter, createWebHashHistory } from 'vue-router';
import index from '@/pages/index';
import feedbacks from '@/pages/feedbacks';

const routes = [
  { path: '/', component: index },
  { path: '/feedbacks', component: feedbacks },
];

const router = createRouter({
  history: createWebHashHistory(),
  routes,
});

export default router;
