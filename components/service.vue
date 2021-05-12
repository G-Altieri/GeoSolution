<template>
   <div class="flex items-stretch rounded-xl border-2 border-green-500 p-2 bg-white shadow-md x">
      <img width="80px" :src="require(`~/assets/img/service/${img}.svg`)" :alt="img" class="flex-none self-center">
      <div class="mx-2 font-semibold flex-grow self-center text-sm md:text-xl" 
      :class="{'text-xl':txtXl}"
      > {{text}}  <div v-if="text1"> {{text1}}</div>  <div v-if="text2"> {{text2}}</div> </div>
    </div>
</template>

<script>
export default {
  props: {
    id: {
      type: String,
      default: "",
    },
    text: {
      type: String,
      default: "",
    },
    text1: {
      type: String,
      default: null,
    },
    text2: {
      type: String,
      default: null,
    },
    txtXl: {
      type: Boolean,
      default: true,
    },
    
    img: {
      type: String,
      default: "",
    },
  },
}
</script>

<style>

</style>