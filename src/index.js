import "./scss/styles.scss";

import Vue from 'vue';
import hello from './js/components/HelloWorld.vue';

new Vue({
  el:'#app',
  components:{
    hello
  },
  data:{
    mensaje: 'Hola Vue!'
  }
})


 

