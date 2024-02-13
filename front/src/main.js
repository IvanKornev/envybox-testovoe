import { createApp } from 'vue';
import { vuetify, api } from '@/app/plugins';
import router from '@/app/router';
import App from '@/App';

createApp(App)
  .use(router)
  .use(api)
  .use(vuetify)
  .mount('#app');
