import "../node_modules/@fortawesome/fontawesome-free/js/all";
import BootstrapVue from 'bootstrap-vue'
Vue.use(BootstrapVue)

import "./scss/styles.scss";

import Vue from 'vue';


import hello_world from './js/components/HelloWorld.vue';
import float_social from './js/components/FloatSocial.vue';


import VueProgressBar from 'vue-progressbar';

const options = {
  color: '#0984e3',
  failedColor: '#d63031',
  thickness: '5px',
  transition: {
    speed: '0.5s',
    opacity: '0.6s',
    termination: 500
  },
  autoRevert: true,
  location: 'top',
  inverse: false,
  position:'fixed',
  autoFinish:true
}

Vue.use(VueProgressBar, options);


new Vue({
  el:'#app',
  components:{
    hello_world,
    float_social,
  },
  data:{
    mensaje: 'Hola Vue!'
  },
  methods:{
    
  },
  mounted(){
    this.$Progress.finish()
    //this.$bvModal.show('modal-1')
  },
  created(){
    this.$Progress.start()
  },
  
})



import LazyLoad from "vanilla-lazyload";
var lazyLoadInstance = new LazyLoad({
  elements_selector: ".lazy"
  // ... more custom settings?
});
 

