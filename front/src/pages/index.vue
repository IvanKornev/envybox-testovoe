<template>
  <section class="content">
    <h2 class="mb-4 text-center">
      Форма обратной связи
    </h2>
    <FeedbackForm />
  </section>
</template>

<script>
import { FeedbackForm } from '@/widgets/feedback';
export default {
  components: {
    FeedbackForm,
  },
};
</script>
