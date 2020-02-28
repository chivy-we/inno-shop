<template>
    <main-layout>
        <img class="slideShow" src="/images/food-slideshow.jpg" />
        <div>
            <md-button class="md-raised md-primary">Drink</md-button>
            <md-button class="md-raised md-primary">Snack</md-button>
            <md-button class="md-raised md-primary">Shop</md-button>
        </div>

        <div>
            <md-card>
                <md-card-media>
                    <img src="/assets/card-image.jpg" alt="People">
                </md-card-media>

                <md-card-header>
                    <div class="md-title">Khmer Cake</div>
                    <div class="md-subhead">$ 5.00</div>
                </md-card-header>

                <md-card-actions>
                    <md-button to="/product">View</md-button>
                    <md-button class="md-primary">Buy</md-button>
                </md-card-actions>
            </md-card>

            <md-card>
                <md-card-media>
                    <img src="/assets/card-image.jpg" alt="People">
                </md-card-media>

                <md-card-header>
                    <div class="md-title">Khmer Cake</div>
                    <div class="md-subhead">$ 5.00</div>
                </md-card-header>

                <md-card-actions>
                    <md-button to="/product">View</md-button>
                    <md-button class="md-primary">Buy</md-button>
                </md-card-actions>
            </md-card>
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
    .md-card {
        width: 320px;
        margin: 4px;
        display: inline-block;
        vertical-align: top;
    }
</style>
