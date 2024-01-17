
import { createApp } from 'vue';
import Example from './components/ExampleComponent.vue';
import Banner from './components/Banner.vue';
import Navbar from './components/NavBar.vue';
import Foot from './components/Footer.vue';


const app = createApp({
    components: {
        Example, Banner, Navbar, Foot,
    }
});

app.mount('#app');
