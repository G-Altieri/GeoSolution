<template>
  <div>
    <!-- BackGround -->
    <div class="bg"></div>



<div class="container mx-auto h-screen w-full bg-white relative contaienerPage">
 
    <!-- NavBar -->
    <NavBar />

    <!-- Menu --> 

    <!-- Body --> 
    <Nuxt />

    <Footer />
</div>

    <!-- Footer -->
  </div>
</template>


<script>
  import { mapGetters } from "vuex";
export default {
 data() {
    return {};
  },
  head() {
    return {
      bodyAttrs: {
        class: this.getStatusMenu
          ? "scrollbar overflow-hidden" //overflow-y-scroll fixed w-full lasciano la barra
          : "scrollbar",                               //overflow-hidden rimuovolo la barra
      },
    };
  },
  computed: {
    ...mapGetters(["getStatusMenu"]),
  },

}
</script>


<style>


</style>



