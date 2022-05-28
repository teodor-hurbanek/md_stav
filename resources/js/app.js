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
const navbarDropdown = document.getElementById('navbarDropdown');
const dropdownMenu = document.getElementById('dropdownMenu');
window.showDropdown = function() {
    dropdownMenu.style.display = 'block';
}

window.closeDropdown = () => {
    dropdownMenu.style.display = 'none';
}

document.addEventListener('click', event => {
    if (event.target !== dropdownMenu) {
        closeDropdown()
    } 
    if (event.target === navbarDropdown) {
        showDropdown()
    }
})

/* AREA */

/**
 * Open Main Overlay
 */
 const modal = document.getElementById('overlay')
 window.openModal = () => {
    document.body.style.overflow = 'hidden'
    modal.style.display = 'block'
    window.setTimeout(function() {
        modal.style.opacity = 1;
    }, 0);
}

window.closeModal = () => {
    closePostHeader()
    closeGallery()
    document.body.style.overflow = 'auto'
}

/**
 * Open and Close Post header
 */
const postHeader = document.getElementById('postHeader')
window.openPostHeader = () => {
    postHeader.style.display = 'block'
    modal.appendChild(postHeader)
    openModal()
}

window.closePostHeader = () => {
    modal.style.opacity = 0;
    window.setTimeout(function() {
        modal.style.display = 'none'
        postHeader.style.display = 'none'
        postHeader.remove()
      }, 500);
}

/**
 * Open, Close and Gallery controls
 */
const gallery = document.getElementById('gallery')
const images = document.querySelectorAll('.one-image')
let id = null
window.openGallery = (key) => {
    modal.appendChild(gallery)
    openModal()
    gallery.style.display = 'block'
    id = key
    showImage(key)
}

window.closeGallery = () => {
    modal.style.opacity = 0;
    window.setTimeout(function() {
        modal.style.display = 'none'
        gallery.style.display = 'none'
        gallery.remove()
        closeImages()
      }, 500);
}

window.showImage = key => {
    if (images.length <= key) {
        images[0].style.display = 'block'
        id = 0
    } else if (key < 0) {
        images[images.length - 1].style.display = 'block'
        id = images.length - 1
    } else {
        images[key].style.display = 'block'
    }
}

window.closeImages = () => {
    images.forEach(item => {
        item.style.display = 'none'
    });
}

window.prevImage = event => {
    event.stopPropagation()
    closeImages()
    id -= 1
    showImage(id)
}

window.nextImage = event => {
    event.stopPropagation()
    closeImages()
    id += 1
    showImage(id)
}