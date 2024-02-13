<template>
  <VSheet width="300" class="mx-auto">
    <VForm fast-fail @submit.prevent>
      <VTextField
        label="Имя"
      ></VTextField>
      <VTextField
        label="Обращение"
      ></VTextField>
      <VBtn type="submit" block class="mt-2">Отправить</VBtn>
    </VForm>
  </VSheet>
</template>
