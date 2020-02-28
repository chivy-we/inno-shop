<template>
    <main-layout>
        <search-box></search-box>
        <img class="slide-show" src="/images/food-slideshow.png" />
        <div class="content-container">
            <div class="category">
                <md-button class="md-raised md-primary">Drink</md-button>
                <md-button class="md-raised">Snack</md-button>
                <md-button class="md-raised">Shop</md-button>
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
    .category {
        .md-button {
            border-radius: 20px;
        }
    }
</style>
