<template>
    <div>
        <h1>Top Sell</h1>
        <md-card>
            <md-card-media>
                <img src="/assets/img5.png" alt="People">
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
                <img src="/assets/img1.png" alt="People">
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
                <img src="/assets/img4.png" alt="People">
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
                <img src="/assets/img2.png" alt="People">
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
                <img src="/assets/img3.png" alt="People">
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
        width: 32%;
        margin: 4px 0 4px 5px;
        @media only screen and (max-width: 600px) {
            width: 100%;
            margin: 4px;
        }
        display: inline-block;
        vertical-align: top;
        img {
            object-fit: contain;
            max-height: 147px;
        }
    }
</style>
