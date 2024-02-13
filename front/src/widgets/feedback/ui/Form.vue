<template>
  <VSheet
    width="300"
    class="mx-auto"
  >
    <VForm
      fast-fail
      @submit.prevent="submitForm"
    >
      <SuccessDialog
        v-if="successDialogIsOpen"
        :is-open="successDialogIsOpen"
        @close="successDialogIsOpen = false"
      />
      <VTextField
        label="Имя"
        maxlength="40"
        v-model.trim="state.name"
        required
      />
      <VTextarea
        label="Обращение"
        maxlength="200"
        resize="none"
        v-model.trim="state.appeal"
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
      successDialogIsOpen: false,
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
        this.successDialogIsOpen = true;
        this.$store.commit('feedbacks/save', savedFeedback);
      }
      this.clearForm();
    },
  },
};
</script>
