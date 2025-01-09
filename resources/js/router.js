import { createRouter, createWebHistory } from 'vue-router';
import PageList from './components/PageList.vue';
import PageForm from './components/PageForm.vue';
import PageView from './components/PageView.vue'; // Create a new component for viewing a page

const routes = [
    { path: '/', component: PageList },
    { path: '/create', component: PageForm },
    { path: '/edit/:id', component: PageForm, props: true },
    {
      path: '/page/:slug',
      name: 'PageView',
      component: PageView,
      props: true, // Allows passing route params as props
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
