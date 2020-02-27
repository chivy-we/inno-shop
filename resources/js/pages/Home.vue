<template>
    <main-layout>
        <p>Welcome home</p>
        <md-button class="md-raised">Default</md-button>
        <md-button class="md-raised" :md-ripple="false">Ripple Off</md-button>
        <md-button class="md-raised md-primary">Primary</md-button>
        <md-button class="md-raised md-accent">Accent</md-button>
        <md-button class="md-raised" disabled>Disabled</md-button>
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
