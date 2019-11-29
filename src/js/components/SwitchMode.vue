<template>
  <div class="switch-wrapper">
      <label class="toggle">
        <input type="checkbox" 
        :checked="(theme === 'dark') ? 'checked' : false"
        @change="$emit('toggle')"
        >
        <span class="switch"></span>
      </label>
  </div>
</template>

<script>
export default {
  name: 'SwitchMode',
  props:[
    'theme'
  ]
}
</script>

<style scoped lang="scss">
.toggle{
  position: relative;
  display: inline-block;
  width:36px;
  height: 22px;
  input{
    opacity: 0;
    width: 0;
    height: 0;
  }
  .switch{
     position: absolute;
     cursor: pointer;
     top:0;
     left: 0;
     right: 0;
     bottom: 0;
     background: silver;
     transition:.5s; 
     border-radius: 25px;
     &::before{
       position:absolute;
       content:'';
       height: 16px;
       width: 16px;
       left: 2px;
       bottom: 3px;
       background: white;
       transition:.5s;
       border-radius: 50%;
     }
  }
}
input{

  &:checked + .switch{
    background: var(--primary);
  }

  &:focus + .switch{
    box-shadow: 0 0 2px var(--primary);
  }

  &:checked + .switch::before{
    transform:translateX(100%)
  }
}
</style>
