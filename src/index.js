import Vue from 'vue';

//Plugins Vue
import BootstrapVue from 'bootstrap-vue'
Vue.use(BootstrapVue)

import axios from 'axios';
Vue.use(axios);

import Vuelidate from 'vuelidate';
Vue.use(Vuelidate);





//mixin app

Vue.mixin({
  data: function() {
      return {
          url:'https://hektor.mx/ginger/',
      }
  },
  created: function() {},
  mounted:function(){ },
  methods:{},
})//end mixin


//Componentes app

import hello_world from './js/components/HelloWorld.vue';
import float_social from './js/components/FloatSocial.vue';
import contact from './js/components/Contact.vue';
import switchmode from './js/components/SwitchMode.vue';


new Vue({
  el:'#app',
  components:{
    hello_world,
    float_social,
    contact,
    switchmode
  },
  data:{
    mensaje: 'Hola Vue!',
    theme:localStorage.theme,
  },
  methods:{
    toggle(){
      if(this.theme === 'dark'){
        this.theme = 'light';
      }else{
        this.theme = 'dark';
      }
    }
  },
  mounted(){
    this.$Progress.finish()
    //this.$bvModal.show('modal-1')

    if(localStorage.theme == undefined){
      localStorage.theme = 'light'
    }
      console.log(localStorage.theme)
  },
  created(){
    
  },
  watch:{
    theme(mode) {
      localStorage.theme = mode;
    }
  }
  
})



import "./scss/styles.scss";

import LazyLoad from "vanilla-lazyload";
var lazyLoadInstance = new LazyLoad({
  elements_selector: ".lazy"
  // ... more custom settings?
});
 

