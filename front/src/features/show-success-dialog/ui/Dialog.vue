<template>
  <VDialog :model-value="isOpen" width="500">
    <template #default>
      <VCard title="Успех!">
        <VCardText>
          Ваше обращение было успешно отправлено
        </VCardText>
        <VCardActions>
          <VBtn
            color="primary"
            text="Хорошо"
            block
          />
        </VCardActions>
      </VCard>
    </template>
  </VDialog>
</template>

<script>
export default {
  props: {
    isOpen: {
      type: Boolean,
      default: true,
    },
  },
};
</script>
