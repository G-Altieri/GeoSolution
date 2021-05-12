<template>
  <!-- <div
    class="text-center bgFooter bg-green-500 flex items-stretch w-full grid text-white"
  >
    <div class="self-center  h-40 bg-gradient-to-b from-gray-700 to-black ">Footer</div>
  </div> -->
  <div>

    <div class="w-full">
      <img src="~/assets/img/footer.jpg" alt="footer img" width="100%" class="bgFooter" :class="{'indexT':$nuxt.$route.path=='/'}">
    </div>

  </div>
</template>




<style>
.bgFooter{
bottom: 0;
position: absolute;
}
.indexT{
  transform: translateY(-7px);
}
</style>