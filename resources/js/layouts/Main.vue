<template>
    <div class="page-container">
        <md-app>
            <md-app-content>
                <slot></slot>
            </md-app-content>
        </md-app>

        <md-bottom-bar md-sync-route class="bottom-bar">
            <md-bottom-bar-item to="/" exact md-label="Home" md-icon="home"></md-bottom-bar-item>
            <md-bottom-bar-item to="/feed" md-label="Feed" md-icon="favorite"></md-bottom-bar-item>
            <md-bottom-bar-item to="/sms" md-label="SMS" md-icon="textsms"></md-bottom-bar-item>
            <md-bottom-bar-item to="/cart" md-label="Cart" md-icon="shopping_cart"></md-bottom-bar-item>
        </md-bottom-bar>
    </div>
</template>

<style scoped>
    .bottom-bar {
        position: fixed;
        bottom: 0;
    }
</style>
