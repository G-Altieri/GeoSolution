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
            class="absolute w-full mx-auto grid grid-cols-2 md:grid-cols-3 self-end justify-items-stretch mt-12 md:mt-24 bgSoft"
          >
            <!-- Logo  -->
            <div class="justify-self-center col-span-2 md:col-span-1 grid justify-items-stretch flex items-stretch mb-6">
              <nuxt-link to="/">
                <img
                  src="~assets/img/logo-black1.svg"
                  alt="Logo GeoSolution"
                  width="60px"
                  class="self-center border-2 rounded-full justify-self-center"
                />
              </nuxt-link>
            </div>
            <!-- Content -->
            <div class="text-sm font-light text-white text-left px-12  ">
              <nuxt-link to="/service">{{$t("footer.service")}}</nuxt-link><br />
              <nuxt-link to="/portfolio">{{$t("footer.portfolio")}}</nuxt-link><br />
              <nuxt-link to="/contacts">{{$t("footer.contacts")}}</nuxt-link><br />
            </div>
            <div class="text-sm font-light text-white text-left px-6  ">
              <nuxt-link to="/legal/termini_condizioni">{{$t("footer.termini")}}</nuxt-link><br />
              <nuxt-link to="/legal/policy_privacy">{{$t("footer.policy")}}</nuxt-link><br />
              <nuxt-link to="/legal/cookie_policy">{{$t("footer.cookie")}}</nuxt-link><br />
            </div>
            <!-- Info Azienda -->
            <div
              class=" text-center col-span-2 md:col-span-3 text-sm font-light text-white mt-4"
            >
              Dott. Geol. Taddei Gianluca <br />P.IVA 02132360690 <br> <div class="text-xs text-gray-300">©copyright all rights reserved ©2005-2021 </div> 
            </div>
          <!-- Scritta a fondo page -->

          <div
            class="text-gray-400 w-full flex justify-center mt-4 font-light text-xs text-center col-span-2 md:col-span-3"
          >
            <a
              target="_black"
              href="https:\\www.instagram.com/g_altieri"
            >
            Developed and Design by Altieri Giovanni</a>
          </div>
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
.bgSoft {
background: linear-gradient(0deg, rgba(0,0,0,1) 0%, rgba(255,255,255,0) 100%); 
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





