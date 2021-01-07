require('./bootstrap');

import Vue from 'vue';

const app = new Vue ({
    el: ('#heroes'),
    data: {
        navbar: [
            {text: 'Characters'},
            {text: 'Comics'},
            {text: 'Movies'},
            {text: 'Tv'},
            {text: 'Games'},
            {text: 'Collectibles'},
            {text: 'Videos'},
            {text: 'Fans'},
            {text: 'News'},
            {text: 'Shop'},
        ],
    },
    created() {
    },
    methods: {
    }
});