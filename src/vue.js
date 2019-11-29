import Vue from 'vue';

//Plugins Vue
import BootstrapVue from 'bootstrap-vue'
Vue.use(BootstrapVue)

import axios from 'axios';
Vue.use(axios);

import Vuelidate from 'vuelidate';
Vue.use(Vuelidate);

//Componentes Vue
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