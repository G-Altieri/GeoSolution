<template>
  <div      :class="classAdd">
    

      <img

            :src="require(`~/assets/img/service/${img}.svg`)" 
             :alt="img"
            :width="width+'px'"
            class=" rounded-xl my-4 mx-6 noImgSelect"
          />
      
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
    
    width:{
         type: String,
      default: "",
    },
    
    img: {
      type: String,
      default: "",
    },
    classAdd: {
      type: String,
      default: "",
    },
  },
}
</script>

<style>

</style>