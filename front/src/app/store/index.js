import { createStore } from 'vuex';
import feedbacks from './feedbacks';

const store = createStore({
  modules: {
    feedbacks,
  },
});

export default store;
