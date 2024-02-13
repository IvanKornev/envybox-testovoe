<template>
  <section class="content">
    <h2 class="mb-4 text-center">
      Сохраненные формы
    </h2>
    <SavedFeedbacksList />
  </section>
</template>

<script>
import { SavedFeedbacksList } from '@/widgets/feedback';
export default {
  components: {
    SavedFeedbacksList,
  },
};
</script>
