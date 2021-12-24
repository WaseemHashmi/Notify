const { default: Echo } = require('laravel-echo');

require('./bootstrap');
let token = document.head.querySelector('meta[name="user-id"]').content;
window.Echo.private(`App.Models.User.`+token)
    .notification((notification) => {
        document.querySelector('.w3-red').innerText = notification.count;
        document.querySelector('.notifications').innerText = notification.letter.title;
    });
