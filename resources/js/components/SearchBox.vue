<template>
    <div class="search-container">
        <md-autocomplete
            v-model="selectedEmployee"
            class="searchItem"
            :md-options="employees"
            md-layout="box"
            md-dense
        >
            <label>Search ...</label>
        </md-autocomplete>
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
    .search-container {
        margin: 0 auto;
        padding: 10px 30px;
    }
    .searchItem {
        margin: 0;
    }
    .md-field.md-inline.md-autocomplete-box {
        border-radius: 20px;
        background-color: #eeeeee;
    }
</style>
