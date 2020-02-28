<template>
    <div class="page-container">
        <div class="container">
            <div>
                <md-autocomplete
                    v-model="selectedEmployee"
                    class="searchItem"
                    :md-options="employees"
                    md-layout="box"
                    md-dense>
                    <label>Search ...</label>
                </md-autocomplete>
            </div>
        </div>

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

<script>
  export default {
    name: 'AutocompleteBox',
    data: () => ({
      selectedEmployee: null,
      employees: [
        'Jim Halpert',
        'Dwight Schrute',
        'Michael Scott',
        'Pam Beesly',
        'Angela Martin',
        'Kelly Kapoor',
        'Ryan Howard',
        'Kevin Malone',
        'Creed Bratton',
        'Oscar Nunez',
        'Toby Flenderson',
        'Stanley Hudson',
        'Meredith Palmer',
        'Phyllis Lapin-Vance'
      ]
    })
  }
</script>
<style lang="scss" scoped>
    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 15px 30px;
        background: #f9f7f5;
    }
    .search {
        max-width: 500px;
    }
    .slideShow {
        height: 200px;
        width: 100%;
    }
    .searchItem {
        border-radius: 20%;
    }
    .bottom-bar {
        position: fixed;
        bottom: 0;
    }
</style>
