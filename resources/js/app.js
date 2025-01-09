// import { createApp } from 'vue';
// import router from './router.js';
// import PageComponent from './components/PageComponent.vue';

// const app = createApp(PageComponent);
// app.use(router);
// app.mount('#app');
import { createApp } from 'vue';
import App from './components/App.vue';
import router from './router.js';
import "bootstrap/dist/css/bootstrap.min.css";
import "bootstrap/dist/js/bootstrap.bundle.min.js";

createApp(App).use(router).mount('#app');
