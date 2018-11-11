
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('Navbar', require('./components/navbar.vue'));
Vue.component('Bio', require('./components/Bio.vue'));
Vue.component('ProjectDisplay', require('./components/ProjectDisplay.vue'));
Vue.component('AdLink', require('./components/AdLink.vue'));
Vue.component('SSkills', require('./components/SSkills.vue'));
Vue.component('ProjectAd', require('./components/ProjectAd.vue'));
Vue.component('Contact', require('./components/Contact.vue'));
Vue.component('ContactLink', require('./components/ContactLink.vue'));
Vue.component('RecentProjects', require('./components/RecentProjects.vue'));
Vue.component('WorkExperience', require('./components/WorkExperience.vue'));
Vue.component('Education', require('./components/Education.vue'));
Vue.component('Skills', require('./components/Skills.vue'));
Vue.component('Hobbies', require('./components/Hobbies.vue'));
Vue.component('Print', require('./components/Print.vue'));
Vue.component('foot', require('./components/foot.vue'));
Vue.component('projectShow', require('./components/projectShow.vue'));


const app = new Vue({
    el: '#app'
});
