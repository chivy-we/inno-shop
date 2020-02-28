<template>
    <main-layout>
        <div>
            <img class="slide-show" src="/images/food-slideshow.png" />
            <md-table v-model="people" md-card @md-selected="onSelect">
                <md-table-toolbar>
                    <h1 class="md-title">You have ordered</h1>
                </md-table-toolbar>

                <md-table-toolbar slot="md-table-alternate-header" slot-scope="{ count }">
                    <div class="md-toolbar-section-start">{{ getAlternateLabel(count) }}</div>

                    <div class="md-toolbar-section-end">
                        <md-button class="md-icon-button">
                            <md-icon>delete</md-icon>
                        </md-button>
                    </div>
                </md-table-toolbar>

                <md-table-row slot="md-table-row" slot-scope="{ item }" :md-disabled="item.name.includes('Stave')" md-selectable="multiple" md-auto-select>
                    <md-table-cell md-label="Name" md-sort-by="name">{{ item.name }}</md-table-cell>
                    <md-table-cell md-label="Qty" md-sort-by="qty">{{ item.qty }}</md-table-cell>
                    <md-table-cell md-label="Price" md-sort-by="price">{{ item.price }}</md-table-cell>
                </md-table-row>
            </md-table>

            <md-card-actions>
                <md-button class="md-primary">Order</md-button>
            </md-card-actions>


            <!--<p>Selected:</p>-->
            <!--{{ selected }}-->
        </div>
    </main-layout>
</template>

<script>
  import MainLayout from '../layouts/Main.vue';

  export default {
    name: 'TableMultiple',
    components: {
      MainLayout,
    },
    data: () => ({
      selected: [],
      people: [
        {
          name: 'Shawna Dubbin',
          qty: '2',
          price: '$ 5',
        },
        {
          name: 'Lorem Dubbin',
          qty: '1',
          price: '$ 2',
        },
        {
          name: 'Ipsum Dubbin',
          qty: '3',
          price: '$ 5',
        },
        {
          name: 'Foo Dubbin',
          qty: '1',
          price: '$ 3',
        },
      ]
    }),
    methods: {
      onSelect (items) {
        this.selected = items
      },
      getAlternateLabel (count) {
        let plural = ''

        if (count > 1) {
          plural = 's'
        }

        return `${count} item${plural} selected`
      }
    }
  }
</script>

<style lang="scss" scoped>
    .slide-show {
        object-fit: cover;
        width: 100%;
        height: 200px;
    }
    .md-table + .md-table {
        margin-top: 16px
    }
</style>
