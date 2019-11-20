import "./scss/styles.scss";

import Vue from 'vue';
import hello from './js/components/HelloWorld.vue';

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
    hello
  },
  data:{
    mensaje: 'Hola Vue!'
  },
  methods:{
    
  },
  mounted(){
    this.$Progress.finish()
  },
  created(){
    this.$Progress.start()
  },
  
})




 

