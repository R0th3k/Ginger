//Styles
import "./scss/styles.scss";
//mixin app

import "./vue.js";

Vue.mixin({
  data: function() {
      return {
          url:'https://ginger-fw.herokuapp.com/',
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


new Vue({
  el:'#app',
  components:{
    hello_world,
    float_social,
    contact
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
 

