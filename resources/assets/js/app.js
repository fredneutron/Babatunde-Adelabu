
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

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('NavBar', require('./components/Layout/NavBar.vue'));
Vue.component('NavItem', require('./components/Layout/NavItem.vue'));
Vue.component('foot', require('./components/Layout/foot.vue'));
Vue.component('FootSocial', require('./components/Layout/FootSocial.vue'));
Vue.component('FootLinks', require('./components/Layout/FootLinks.vue'));
Vue.component('Bio', require('./components/Home/Bio.vue'));
Vue.component('ProjectAd', require('./components/Home/ProjectAd.vue'));
Vue.component('AdLink', require('./components/Home/AdLink.vue'));
Vue.component('SkillsAd', require('./components/Home/SkillsAd.vue'));
Vue.component('ProjectView', require('./components/Home/ProjectView.vue'));
Vue.component('Home', require('./components/Home/index.vue'));
Vue.component('Contact', require('./components/Contact/index.vue'));
Vue.component('ContactForm', require('./components/Contact/ContactForm.vue'));
Vue.component('FormResponse', require('./components/Contact/FormResponse.vue'));
Vue.component('FormError', require('./components/Contact/FormError.vue'));
Vue.component('ContactLink', require('./components/Contact/ContactLink.vue'));
Vue.component('Project', require('./components/Projects/Project.vue'));
Vue.component('Projects', require('./components/Projects/index.vue'));
Vue.component('WorkExperiences', require('./components/Resume/WorkExperiences.vue'));
Vue.component('Work', require('./components/Resume/Work.vue'));
Vue.component('Educations', require('./components/Resume/Educations.vue'));
Vue.component('Education', require('./components/Resume/Education.vue'));
Vue.component('Skills', require('./components/Resume/Skills.vue'));
Vue.component('Skill', require('./components/Resume/Skill.vue'));
Vue.component('Resume', require('./components/Resume/index.vue'));
Vue.component('Hobbies', require('./components/Resume/Hobbies.vue'));
Vue.component('Print', require('./components/Resume/Print.vue'));
// Vue.component('Blog', require('./components/Blog/index.vue'));
// Vue.component('BlogDescription', require('./components/Blog/BlogDescription.vue'));
// Vue.component('TopPost', require('./components/Blog/TopPost.vue'));
// Vue.component('TopPostArticle', require('./components/Blog/TopPostArticle.vue'));
// Vue.component('BlogArticle', require('./components/Blog/Article.vue'));
Vue.component('Post', require('./components/Post/index.vue'));
Vue.component('PostTitle', require('./components/Post/PostTitle.vue'));
Vue.component('PostBody', require('./components/Post/PostBody.vue'));
Vue.component('PostTags', require('./components/Post/PostTags.vue'));
Vue.component('Comments', require('./components/Comment/index.vue'));
Vue.component('Comment', require('./components/Comment/Comment.vue'));


Vue.mixin({
    data: function () {
        return {
            AppName: 'Babatunde Adelabu',
            BlogName: "BA's Blog",
            BlogDescription: 'My insights about tech innovations',
            BlogLink: '/Blog',
            owner: {
                name: 'Babatunde Adelabu',
                url: '/.',
            },
            imagePath: 'storage',
            now: (n) => {
                let x = new Date(n);
                return x.getMonth()+1 +'/'+ x.getFullYear();
            },
            format: (date) => {
                let n = new Date(date);
                return `${n.toLocaleString('en-Gb', { month: 'short'})} ${n.getDate()}, ${n.getFullYear()}`
            },
            formatUrl: (date, slug) => {
                let n = new Date(date);
                return `/Blog/Post/${n.getFullYear()}/${n.getMonth()}/${slug}`;
            },

        }
    }
});

const app = new Vue({
    el: '#app'
});
