<template>
  <VSheet
    width="300"
    class="mx-auto"
  >
    <VForm
      fast-fail
      @submit.prevent
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
        :disabled="v$.$invalid"
        block
        class="mt-2"
      >
        Отправить
      </VBtn>
    </VForm>
  </VSheet>
</template>

<script setup>
import useForm from '@/widgets/feedback/model/useForm';
const { state, v$ } = useForm();
</script>
