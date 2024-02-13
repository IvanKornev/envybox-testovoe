<template>
  <VDialog :model-value="isOpen" width="500" @update:modelValue="closeDialog">
    <template #default>
      <VCard title="Успех!">
        <VCardText>
          Ваше обращение было успешно отправлено
        </VCardText>
        <VCardActions>
          <VBtn
            color="primary"
            text="Хорошо"
            @click="closeDialog(false)"
            block
          />
        </VCardActions>
      </VCard>
    </template>
  </VDialog>
</template>

<script>
export default {
  emits: ['close'],
  props: {
    isOpen: {
      type: Boolean,
      default: true,
    },
  },
  methods: {
    closeDialog(isOpening = false) {
      if (!isOpening) {
        this.$emit('close');
      }
    },
  },
};
</script>
