
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');
require('./jquery-ui');
require('./Chart');
require('./bulk');




// window.Vue = require('vue');
// window.axios = require('axios');

// console.log('After Axiossssssssssss');

// Vue.component('pagination', require('./components/PaginationComponent.vue'));

// const app = new Vue({
//     el: '#myvueapp',

//     data: {
//             posts: {},
//             pagination: {
//                 'current_page': 1
//             }
//         },

//         methods: {
//             fetchPosts() {
//                 axios.get('buffer-posts?page=' + this.pagination.current_page)
//                     .then(response => {
//                         this.posts = response.data.data.data;
//                         this.pagination = response.data.pagination;


//                         console.log(this.posts);
//                         console.log('hello ');
//                     })
//                     .catch(error => {
//                         console.log(error.response.data);
//                     });
//             }
//         },

//         mounted() {
//             this.fetchPosts();
//         }
// });

