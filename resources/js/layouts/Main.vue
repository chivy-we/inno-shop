<template>
    <div class="page-container md-layout md-alignment-top-center">
        <div class="container md-layout-item md-size-50 md-small-size-100">
            <slot></slot>

            <div class="bottom-bar md-layout md-alignment-top-center">
                <md-bottom-bar md-sync-route class="md-layout-item md-size-50 md-small-size-100">
                    <md-bottom-bar-item to="/" exact md-label="Home" md-icon="home"></md-bottom-bar-item>
                    <md-bottom-bar-item to="/feed" md-label="Feed" md-icon="favorite"></md-bottom-bar-item>
                    <md-bottom-bar-item to="/sms" md-label="SMS" md-icon="textsms"></md-bottom-bar-item>
                    <md-bottom-bar-item to="/cart" md-label="Cart" md-icon="shopping_cart"></md-bottom-bar-item>
                </md-bottom-bar>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>
    .page-container {
        background-color: #eeeeee;
        padding-bottom: 56px;
    }
    .container {
        background-color: #ffffff;
        min-height: 100vh;
    }
    .bottom-bar {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 9999;
    }
    .md-ripple {
        justify-content: space-between;
    }
</style>
