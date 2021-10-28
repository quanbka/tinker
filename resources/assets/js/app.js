/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueAwesomeSwiper from 'vue-awesome-swiper'
import InfiniteLoading from 'vue-infinite-loading';

import 'swiper/css/swiper.css'



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('product-box', require('./components/ProductBox.vue'));
Vue.component('category-box', require('./components/CategoryBox.vue'));
Vue.use(VueAwesomeSwiper, /* { default options with global component } */)
Vue.use(InfiniteLoading, /* { default options with global component } */)


const app = new Vue({
    el: '#app',
    data: {
        'categories': [],
        'isLoadedLatestProducts' : false,
        'isLoadedBestSellerProducts' : false,
    },
    mounted: function() {
        // this.getAllCategories();
    },
    methods: {
        getNext($state) {
            let self = this;
            if (!this.isLoadedLatestProducts) {
                this.loadedLatestProducts($state);
                return;
            }
            $state.complete();
        },
        loadedLatestProducts ($state) {
            let self = this;
            axios.get('/api/latest-products')
                .then(function (response) {
                    self.categories.push(response.data)
                    // console.log(self.categories);
                })
                .catch(function(error) {
                    console.log(error);
                })
                .then(function() {
                    self.isLoadedLatestProducts = true;
                    $state.loaded();
                });
        },
        getAllCategories() {
            console.log("getAllCategories");
            let self = this;
            axios.get('/api/category?filters=type=category,parent_id=0&page_size=-1&embeds=children')
                .then(function(response) {
                    if (response.data.status == 'successful') {
                        self.categories = response.data.result;
                    }
                })
                .catch(function(error) {
                    console.log(error);
                })
                .then(function() {
                });
        }


    }
});

const recommendation = new Vue({
    el: '#recommendation',
});

const mainBanner = new Vue({
    el: '#main-banner',
    data: {
        swiperOption: {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        },
        banners: [1, 2, 3]
    }
});
