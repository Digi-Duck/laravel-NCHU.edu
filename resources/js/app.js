import './bootstrap';

import { createApp } from 'vue/dist/vue.esm-bundler.js';
import Example from './components/ExampleComponent.vue';
import Banner from './components/Banner.vue';

const app = createApp({
  components: {
    Example, Banner,
  }
});

app.mount('#app');
