<template>
  <VSheet
    width="300"
    class="mx-auto"
  >
    <VForm
      fast-fail
      @submit.prevent="submitForm"
    >
      <VTextField
        label="Имя"
        v-model="state.name"
        required
      />
      <VTextarea
        label="Обращение"
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
export default {
  data() {
    return {
      isLoading: false,
    };
  },
  setup() {
    const { state, v$ } = useForm();
    return { state, v$ };
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
      await this.$api.feedback.add(this.state).finally(() => {
        this.isLoading = false;
      });
    },
  },
};
</script>
