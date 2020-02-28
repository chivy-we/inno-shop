<template>
    <main-layout>
        <img class="slideShow" src="/images/food-slideshow.jpg" />
        <div>
            <md-button class="md-raised md-primary">Drink</md-button>
            <md-button class="md-raised md-primary">Snack</md-button>
            <md-button class="md-raised md-primary">Shop</md-button>
        </div>
        <top-sell></top-sell>
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
