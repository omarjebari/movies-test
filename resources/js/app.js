import MovieList from "./pages/MovieList";

require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('movie-list', require('./pages/MovieList.vue').default);

import store from "./store";

import { loadTheme } from './utils/ThemeHelper';

const app = new Vue({
    created() {
        loadTheme();
    },
    render: h => h(MovieList),
    store,
}).$mount("#app");
