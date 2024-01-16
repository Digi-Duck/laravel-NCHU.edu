
import { createApp } from 'vue';
import Example from './components/ExampleComponent.vue';
import Banner from './components/Banner.vue';

const app = createApp({
  components: {
    Example, Banner,
  }
});

app.mount('#app');
