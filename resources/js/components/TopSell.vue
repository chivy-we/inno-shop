<template>
    <div>
        <h1>Top Sell</h1>
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
</template>


<style lang="scss" scoped>
    .md-card {
        width: 320px;
        margin: 4px;
        display: inline-block;
        vertical-align: top;
    }
</style>
