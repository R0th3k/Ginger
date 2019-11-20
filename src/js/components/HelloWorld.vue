<template>
  <div>
    <h1 class="title p-3">{{title}}</h1>
  </div>
</template>

<script>
  export default{
    name:'hello',
    data(){
      return{
        title:'Hola Mundo desde un componente .vue '
      }
    }
  }
</script>

<style lang="scss" scoped>
  h1{
    background: var(--primary);
    color:white;
  }
</style>