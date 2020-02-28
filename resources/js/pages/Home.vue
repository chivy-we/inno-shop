<template>
    <main-layout>
        <search-box></search-box>

        <img class="slide-show" src="/images/food-slideshow.png" />

        <div class="content-container">
            <div>
                <md-button class="md-raised md-primary">Drink</md-button>
                <md-button class="md-raised md-primary">Snack</md-button>
                <md-button class="md-raised md-primary">Shop</md-button>
            </div>
            <top-sell></top-sell>
        </div>
    </main-layout>
</template>

<script>
  import MainLayout from '../layouts/Main.vue';

  export default {
    components: {
      MainLayout,
    },
  };
</script>

<style lang="scss" scoped>
    .slide-show {
        object-fit: cover;
        width: 100%;
    }
    .content-container {
        padding: 10px;
    }
</style>
