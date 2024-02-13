const feedbacks = {
  namespaced: true,
  state: () => ({
    savedFeedbacks: [],
  }),
  mutations: {
    save(state, values = {}) {
      state.savedFeedbacks.push(values);
    }
  },
};

export default feedbacks;
