<template>
  <VSheet
    width="300"
    class="mx-auto"
  >
    <VForm
      fast-fail
      @submit.prevent="submitForm"
    >
      <SuccessDialog />
      <VTextField
        label="Имя"
        v-model="state.name"
        required
      />
      <VTextarea
        label="Обращение"
        resize="none"
        v-model="state.appeal"
        required
      />
      <VBtn
        type="submit"
        :disabled="buttonWasDisabled"
        block
        class="mt-2"
      >
        Отправить
      </VBtn>
    </VForm>
  </VSheet>
</template>

<script>
import useForm from '@/widgets/feedback/model/useForm';
import { SuccessDialog } from '@/features/show-success-dialog';
export default {
  components: {
    SuccessDialog,
  },
  data() {
    return {
      isLoading: false,
    };
  },
  setup() {
    const { state, v$, clearForm } = useForm();
    return { state, v$, clearForm };
  },
  computed: {
    buttonWasDisabled() {
      return this.v$.$invalid || this.isLoading;
    },
  },
  methods: {
    async submitForm() {
      if (this.isLoading) {
        return;
      }
      this.isLoading = true;
      await this.$api.feedback.add(this.state)
        .then(this.handleSubmitResult)
        .finally(() => {
          this.isLoading = false;
        });
    },
    handleSubmitResult({ status, savedFeedback }) {
      if (status === 'success') {
        this.$store.commit('feedbacks/save', savedFeedback);
      }
      this.clearForm();
    },
  },
};
</script>
