<template>
  <!-- <div
    class="text-center bgFooter bg-green-500 flex items-stretch w-full grid text-white"
  >
    <div class="self-center  h-40 bg-gradient-to-b from-gray-700 to-black ">Footer</div>
  </div> -->
  <div>
    <div class="w-full bg-black bgFooter">
      <div v-if="$nuxt.$route.path == '/test'" class="bg-black">
        <img
          :src="require(`~/assets/img/footer2-${mobile}.jpg`)"
          alt="footer img"
          width="100%"
          class=""
          :class="{ indexT: $nuxt.$route.path == '/' }"
        />
      </div>
      <div v-else>
        <!-- Inizio Content -->
        <div class="w-full relative mx-auto flex items-stretch">
          <!-- Griglia contente il menu nel footer -->
          <div
            class="absolute w-full mx-auto grid grid-cols-2 md:grid-cols-3 self-center justify-items-stretch mt-12"
          >
            <!-- <div class="text-2xl text-white font-semibold justify-self-center titleFooter flex items-stretch"><div class="self-center"> GeoSolution</div></div> -->
            <!-- Logo  -->
            <div class="justify-self-center grid justify-items-stretch flex items-stretch">
              <nuxt-link to="/">
                <img
                  src="~assets/img/logo-black1.svg"
                  alt="Logo GeoSolution"
                  width="60px"
                  class="self-center border-2 rounded-full justify-self-center self-center"
                />
              </nuxt-link>
            </div>
            <!-- Content -->
            <div class="text-lg font-light text-white">
              <nuxt-link to="/service">Servizi</nuxt-link><br />
              <nuxt-link to="/portfolio">Portfolio</nuxt-link><br />
              <nuxt-link to="/contants">Contatti</nuxt-link><br />
            </div>
            <!-- Info Azienda -->
            <div
              class="py-2 text-center col-span-2 md:col-span-1 md:text-left text-md font-light text-white"
            >
              Dott. Geol. Taddei Gianluca <br />P.IVA 02132360690
            </div>
          </div>

          <!-- Scritta a fondo page -->
          <div
            class="text-gray-400 w-full flex justify-center bottom-0 absolute font-light text-xs"
          >
            Developed and Design by<a
              target="_black"
              href="https:\\www.instagram.com/g_altieri"
            >
              Altieri Giovanni</a
            >
          </div>

          <!-- Img di sfondo -->
          <img
            :src="require(`~/assets/img/footer-${mobile}.jpg`)"
            alt="footer img"
            width="100%"
            class="noImgSelect"
            :class="{ indexT: $nuxt.$route.path == '/' }"
          />
        </div>
        <!-- Fine Content -->
      </div>
    </div>
  </div>
</template>

  <style>
.bgFooter {
  /* bottom: 0; */
  background: #1e1f23;
  /*position: absolute;*/
}
.indexT {
  /* transform: translateY(-7px);*/
  /*height: calc(100%+7px);*/
}
.titleFooter {
  text-shadow: 0px 0px 3px rgba(150, 150, 150, 1);
  /* bottom: 0;*/
}
</style>
  
<script>
export default {
  data() {
    return {};
  },
  components: {},
  computed: {},
  props: {
    mobile: {
      type: String,
      default: "",
    },
  },
  methods: {},

  mounted() {},
};
</script>





