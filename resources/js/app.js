/* 
Segue o passo para vincular o vue com laravel
https://www.jlgregorio.com.br/2021/08/13/configurando-o-vue-3-no-laravel-8/
A mudança ocorre apenas no app.js
*/

require('./bootstrap');
import { createApp } from 'vue';


let app=createApp({})
app.component('home-component', require('./components/HomeComponent.vue').default);
app.mount("#app")


