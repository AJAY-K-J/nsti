/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

import VueRouter from 'vue-router'

import moment from 'moment';

import VueProgressBar from 'vue-progressbar'

import Swal from 'sweetalert2'

import Vue from 'vue';

window.Swal=Swal;
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
  })
window.Toast=Toast;


//progress Bar
Vue.use(VueProgressBar,{
    color:'rgb(143,255,199)',
    failedColor:'red',
    height:'10px'

})

//for refresh page after an action occures
window.Fire=new Vue();


Vue.use(VueRouter)

const routes = [

    { path: '/Certificate-Verification', component: require('./components/CertificateVerification.vue').default },
    { path: '/Fee-Verification', component: require('./components/FeeVerification.vue').default },
    { path: '/Admission-Pending', component: require('./components/AdmissionPending.vue').default },
    { path: '/Admitted-List', component: require('./components/AdmittedList.vue').default },
    { path: '/Waiting-List', component: require('./components/WaitingList.vue').default },
    { path: '/Rejected-List', component: require('./components/RejectedList.vue').default },
    { path: '/Adit-Admitted', component: require('./components/AditAdmitted.vue').default },
    { path: '/Cits-Admitted', component: require('./components/CitsAdmitted.vue').default },
    { path: '/Cts-Admitted', component: require('./components/CtsAdmitted.vue').default },

  ]





  const router = new VueRouter({
    mode: 'history',
    routes,
    // short for `routes: routes`
  })

//for uppercase firstletter of data in vue component
Vue.filter('upText',function(text){
    return text.charAt(0).toUpperCase()+text.slice(1);
})

//for show date in correct format on vue component
Vue.filter('myDate',function(dateFormatted){
    return moment(dateFormatted).format("Do MMMM YYYY");
})


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.component('application-form', require('./components/ApplicationForm.vue').default);

Vue.component('Admitted-Mech-RandAc', require('./components/AdmittedMechRandAc.vue').default);

Vue.component('Reading-OfDrawing-Admitted', require('./components/ReadingOfDrawingAdmitted.vue').default);

Vue.component('Electrician-Wireman-Admitted', require('./components/ElectricianWiremanAdmitted.vue').default);

Vue.component('Electronic-Mechanic', require('./components/ElectronicMechanic.vue').default);

Vue.component('Welder-Component', require('./components/Welder.vue').default);

Vue.component('Solar-Technician', require('./components/SolarTechnician.vue').default);

Vue.component('Iot-Admitted', require('./components/IotAdmitted.vue').default);

Vue.component('Electrician-Power-Distribution', require('./components/ElectricianPowerDistribution.vue').default);




//for admin dashboards
const app = new Vue({
    el: '#app',
    router
});

//for user components
const userApp = new Vue({
    el: '#userApp',

});








