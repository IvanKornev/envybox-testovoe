<template>
  <VCard
    max-width="350"
    class="mx-auto"
    color="primary"
    variant="tonal"
  >
    <VCardItem>
      <div class="item__wrapper">
        <div class="text-h6 mb-3">
          Имя: {{ item.name }} (отправлено: {{ createdAtDate }})
        </div>
        <div class="text-h6">
          {{ item.appeal }}
        </div>
      </div>
    </VCardItem>
  </VCard>
</template>

<script>
export default {
  props: {
    item: {
      type: Object,
      required: true,
    },
  },
  computed: {
    createdAtDate() {
      return new Date(this.item.created_at).toLocaleString();
    },
  },
};
</script>

<style scoped>
.item__wrapper {
  max-height: 300px;
  padding-right: 16px;
  overflow: auto;
}
</style>
