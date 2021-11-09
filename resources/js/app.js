require('./bootstrap');

window.Vue = require('vue');
Vue.config.productionTip = false;


// Vue.component('store-data', require('./components/StoreData.vue').default);

const app = new Vue({
    el: '#app',
    store,
});
