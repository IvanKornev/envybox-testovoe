<template>
  <div>
    <VApp>
      <VContainer>
        <VAppBar :elevation="2">
          <template #prepend>
            <ul>
              <RouterLink
                to="/"
                class="menu__item"
              >
                Обратная связь
              </RouterLink>
              <RouterLink
                to="/feedbacks"
                class="menu__item"
              >
                Сохраненные формы
              </RouterLink>
            </ul>
          </template>
        </VAppBar>
      </VContainer>
      <VContainer>
        <main class="page__content">
          <RouterView />
        </main>
      </VContainer>
    </VApp>
  </div>
</template>

<style scoped>
.page__content {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
}
.menu__item {
  text-decoration: none;
  color: blue;
}
.menu__item:not(:first-child) {
  margin-left: 20px;
}
</style>
