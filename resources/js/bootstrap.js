
import axios from 'axios';

import { createApp } from 'vue';
import App from './components/App.vue';
import Login from './components/Login.vue';
import Register from './components/Register.vue';
import Profile from './components/Profile.vue';
import { createRouter, createWebHistory } from 'vue-router';
import store from './store';

import 'admin-lte/dist/css/adminlte.min.css';
import 'admin-lte/dist/js/adminlte.min.js';

window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            name: 'home',
            component: Login
        },
        {
            path: '/register',
            name: 'register',
            component: Register,
        },
        {
            path: '/profile',
            name: 'profile',
            component: Profile,
        },
    ],
});

const app = createApp(App);

app.use(router);
app.use(store);
app.config.globalProperties.$axios = axios;
app.config.globalProperties.$axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

const appName = import.meta.env.VITE_APP_NAME;
app.mount('#app');

