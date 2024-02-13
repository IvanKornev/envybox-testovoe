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
      <VTextField
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
import { reactive } from 'vue';
import { useVuelidate } from '@vuelidate/core';
import { required } from '@vuelidate/validators';
const rules = {
  name: { required },
  appeal: { required, },
};
const initialState = {
  name: '',
  appeal: '',
};
const state = reactive({
  ...initialState,
});
const v$ = useVuelidate(rules, state);
</script>
