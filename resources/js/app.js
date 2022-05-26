/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

/* ADMIN */
const dropdownMenu = document.getElementById('dropdownMenu');
window.showDropdown = function() {
    dropdownMenu.style.display = "block";
}

/* AREA */
const modal = document.getElementById('overlay')
const postHeader = document.getElementById('postHeader')
window.openPostHeader = () => {
    modal.style.display = 'block'
    postHeader.style.display = 'block'
    modal.appendChild(postHeader)
    window.setTimeout(function(){
        modal.style.opacity = 1;
      },0);
}

window.closePostHeader = () => {
    modal.style.opacity = 0;
    window.setTimeout(function(){
        modal.style.display = 'none'
        postHeader.style.display = 'none'
        postHeader.remove()
      },500);
}

window.onclick = function(event) {
if (event.target == modal) {
        closePostHeader()
    }
}