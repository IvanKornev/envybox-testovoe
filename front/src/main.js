import { createApp } from 'vue';
import { vuetify } from '@/app/plugins';
import router from '@/app/router';
import App from '@/App';

createApp(App)
  .use(router)
  .use(vuetify)
  .mount('#app');
