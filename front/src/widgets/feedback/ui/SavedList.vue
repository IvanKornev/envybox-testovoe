<template>
  <div class="list">
    <div v-if="list.length > 0" class="list__wrapper">
      <FeedbackCard v-for="item in list" :key="item.id" :item="item" class="wrapper__card" />
    </div>
    <div v-else>
      <p>Вы ещё не отправили ни одной формы</p>
    </div>
  </div>
</template>

<script>
import { FeedbackCard } from '@/entities/feedback';
export default {
  components: {
    FeedbackCard,
  },
  computed: {
    list() {
      return this.$store.state.feedbacks.savedFeedbacks;
    },
  },
};
</script>

<style scoped>
.list {
  max-width: 1200px;
}
.list__wrapper {
  display: grid;
  column-gap: 20px;
  row-gap: 20px;
  grid-template-columns: repeat(4, auto);
}
.wrapper__card {
  min-width: 300px;
  min-height: 300px;
}
</style>
