<template>
    <main-layout>
        <div>
            <h1>Khmer Food</h1>
            <div class="item-detail-card">
                <md-card md-small-size="100" md-medium-size="50">
                  <md-card-media>
                    <img src="/assets/img5.png">
                  </md-card-media>
                <div>
                  <div class="left-title">
                      <div class="title">Price 5.00$</div>
                      <div class="title">Quantities: 2</div>
                  </div>
                  <div class="right-title">
                      <div class="title">Inno Shop</div>
                      <div class="title">Item Total: 5</div>
                   </div>
                   <div class="left-title">
                     <div class="title">Bong Pich</div>
                  </div>
                </div>

                  <md-card-actions md-alignment="space-between">
                      <md-button class="md-icon-button">
                        <md-icon>shopping_cart</md-icon>
                      </md-button>
                      <div>
                        <md-button>Add</md-button>
                        <md-button>Buy</md-button>
                      </div>

                  </md-card-actions>
                </md-card>
            </div>
        </div>

        <div class="content-container">
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
    h1 {
        text-align: center;
    }
    #container {
       .md-layout {
          background-color: white;
          min-height: 100px;
          border-color: black;
          align-items: center;
          justify-content: center;
          border-width: 1px;
          padding: 8px;
       }
    }
    .content-container {
        padding: 10px;
    }
    .item-detail-card {
        width: 100%;
        display: flex;
        justify-content: center;
    }

    .md-card {
        margin: 4px;
        display: inline-block;
        vertical-align: top;
    }
    .left-title, .right-title {
        display: flex;
        justify-content: space-between;
        padding: 5px 40px 5px 20px;
        font-size: 15px;
    }
</style>
