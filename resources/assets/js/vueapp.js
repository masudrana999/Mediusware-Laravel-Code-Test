window.Vue = require('vue');
window.axios = require('axios');

// console.log('After Axiossssssssssss');

Vue.component('pagination', require('./components/PaginationComponent.vue'));

const app = new Vue({
    el: '#vueappp',

    data: {
            posts: {},
            pagination: {
                'current_page': 1
            }
        },

        methods: {
            fetchPosts() {
                console.log('After axios call');
                axios.get('buffer-posts?page=' + this.pagination.current_page)
                    .then(response => {
                        this.posts = response.data.data.data;
                        this.pagination = response.data.pagination;

                        // console.log('inside fecth posts');
                        console.log(response.data.data.data);
                    })
                    .catch(error => {
                        console.log(error.response.data);
                    });
            }
        },

        mounted() {
            this.fetchPosts();
        }
});

