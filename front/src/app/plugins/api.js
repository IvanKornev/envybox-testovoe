import { feedback } from '@/app/api';

export default {
  install: (app) => {
    app.config.globalProperties.$api = {
      feedback,
    };
  }
};
