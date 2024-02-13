<template>
  <div class="list">
    <div class="list__wrapper">
      <FeedbackCard v-for="i in 12" :key="i" />
    </div>
  </div>
</template>

<script>
import { FeedbackCard } from '@/entities/feedback';
export default {
  components: {
    FeedbackCard,
  },
};
</script>

<style scoped>
.list__wrapper {
  display: grid;
  column-gap: 20px;
  row-gap: 20px;
  grid-template-columns: repeat(4, auto);
}
</style>
