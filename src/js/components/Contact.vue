<template>
  <form @submit.prevent="submit" class="p-2 mb-4 mt-4">

    <div class="form-group">
      <label for="name">Nombre *</label>
      <input type="text" class="form-control" 
      :class="{'is-invalid' : $v.name.$error , 'is-valid' : $v.name.required && !$v.name.$invalid}"
      id="name"  v-model="$v.name.$model">
    </div>

    <div class="form-group">
      <label for="email">Email *</label>
      <input type="email" class="form-control" 
      :class="{'is-invalid' : $v.email.$error, 'is-valid' : !$v.email.$error && $v.email.required}" 
      id="email"  v-model="$v.email.$model">
      <small class="c-danger" v-if="!$v.email.email ">Asegurate de escribir un email correcto</small>
      
    </div>

    <div class="form-group">
      <label for="phone">Teléfono</label>
      <input type="tel" class="form-control" 
      :class="{'is-invalid' : $v.phone.$model.length >= 1 && $v.phone.$model.length <= 9, 'is-valid': $v.phone.$model.length >=10}" id="phone"  v-model="$v.phone.$model">

      <small class="c-danger" v-if="!$v.phone.minLength">Minimo 10 digitos</small>
    </div>

    <div class="form-group">
      <label for="subject">Asunto *</label>
      <input type="text" class="form-control" :class="{'is-invalid' : $v.subject.$error , 'is-valid' : $v.subject.required && !$v.subject.$invalid}" id="subject"  v-model="$v.subject.$model">
    </div>

    <div class="form-group">
      <label for="message">Tu mensaje *</label>
      <textarea class="form-control" :class="{'is-invalid' : $v.message.$error , 'is-valid' : $v.message.required && !$v.message.$invalid}" id="message" rows="3" v-model="$v.message.$model"></textarea>
    </div>
    
    <b-alert variant="warning" show dismissible v-if="emptyFields">
      Asegurate de llenar todos los campos requeridos
    </b-alert>

    <b-alert variant="success" show dismissible v-if="sent">
      Gracias por tu mensaje, en breve te responderemos.
    </b-alert>

    <b-button type="submit" variant="primary" class="w-100" v-if="!sent"> 
      <b-spinner small v-if="sending"></b-spinner>
      Enviar mensaje 
    </b-button>

  </form>
</template>

<script>
  import { required, email, minLength  } from 'vuelidate/lib/validators';
  export default{
    name:'contact',
    data(){
      return{
        name:'',
        email:'',
        phone:'',
        subject:'',
        message:'',
        emptyFields:false,
        sending:false,
        sent:false,
      }
    },
    validations: {
      name: {
        required, 
      },
      email:{
        required,
        email
      },
      phone:{
        minLength: minLength(10),
      },
      subject:{
        required,
      },
      message:{
        required,
      },
    },
    methods:{
      submit() {
        this.$v.$touch()
        if (this.$v.$invalid) {
          this.emptyFields = true;
        } else {
          this.sending = true;
          setTimeout(() => {
            this.sending = false;
            this.sent = true;
          }, 2000)
        }
      }
      }
    }
  
</script>

<style lang="scss" scoped>
  
</style>