import { createApp } from 'vue';
import { vuetify, api } from '@/app/plugins';
import router from '@/app/router';
import store from '@/app/store';
import App from '@/App';

createApp(App)
  .use(router)
  .use(store)
  .use(api)
  .use(vuetify)
  .mount('#app');
