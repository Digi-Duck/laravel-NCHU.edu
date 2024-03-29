import { createSSRApp, h } from 'vue';
import { renderToString } from '@vue/server-renderer';
import { createInertiaApp, Link, Head } from '@inertiajs/vue3';
import createServer from '@inertiajs/vue3/server';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import { createPinia } from 'pinia';

const appName = import.meta.env.VITE_APP_NAME || '國立中興大學推廣教育組';
const pinia = createPinia();

createServer((page) =>
  createInertiaApp({
    page,
    render: renderToString,
    title: (title) => title ? `${title} - ${appName}` : appName,
    resolve: (name) => {
      const pages = resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue'));
      return pages;
    },
    setup({ App, props, plugin }) {
      const Ziggy = {
        ...page.props.ziggy,
        location: new URL(page.props.ziggy.location),
      };

      global.route = (name, params, absolute, config = Ziggy) => route(name, params, absolute, config);

      return createSSRApp({ render: () => h(App, props) })
        .use(plugin)
        .use(pinia)
        .use(ZiggyVue, {
          ...page.props.ziggy,
          location: new URL(page.props.ziggy.location),
        })
        .component('Link', Link)
        .component('Head', Head);
    },
  }),
);
