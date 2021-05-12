<template>
  <div class="mx-auto text-white grid grid-cols-1 text-center bg-black">
    <!-- Immagine di Copertina -->
    <div>
      <img
        :src="require(`~/assets/img/home-img-1-${MediaQuery}.jpg`)"
        alt="Copertina GeoSolution"
      />
    </div>

    <!-- Illustrazioni -->
    <div
      :class="{
        'text-md': queryMobile,
        'text-xl': queryTablet,
        'text-2xl': queryPc,
        'px-4': queryMobile,
        'px-6': queryTablet,
        'px-40': queryPc,
      }"
    >
      <!-- Prima il piccone-->
      <div class="my-24">
        <img
          src="~/assets/img/piccone.svg"
          alt="Piccole"
          class="mx-auto"
          width="60px"
        />
        <div class="text-white my-4 font-light">
          {{ $t("home.illutration.one") }}
          <div class="font-bold">
            {{ $t("home.illutration.oneB") }}
          </div>
        </div>
      </div>

      <!-- Seconda il piccone-->
      <div class="my-24">
        <img
          src="~/assets/img/alberi.svg"
          alt="Piccole"
          class="mx-auto"
          width="60px"
        />
        <div class="text-white my-4 font-light">
          {{ $t("home.illutration.two") }}
          <div class="font-bold">
            {{ $t("home.illutration.twoB") }}
          </div>
          {{ $t("home.illutration.twoEnd") }}
        </div>
      </div>
      <!-- Terza il piccone-->
      <div class="my-24">
        <img
          src="~/assets/img/earth.svg"
          alt="Piccole"
          class="mx-auto"
          width="60px"
        />
        <div class="text-white my-4 font-light">
          <div class="font-bold">
            {{ $t("home.illutration.threeB") }}
          </div>
          {{ $t("home.illutration.three") }}
        </div>
      </div>
    </div>

    <!-- Seconda Img -->
    <div>
      <img
        :src="require(`~/assets/img/home-img-2-${MediaQuery}.jpg`)"
        alt="Img del suolo terrestre"
        class="w-full"
      />
    </div>

    <!-- Dove siamo -->
    <div class="bg-white text-black grid justify-items-stretch">
      <!-- Title -->
      <div class="text-3xl font-bold mt-8 mb-4">{{ $t("home.dovesiamo") }}</div>
      <!-- Gps -->
      <div class="flex items-stretch my-6 justify-self-center">
        <img
          src="~/assets/img/gps.svg"
          alt="Logo GPS"
          width="30px"
          class="justify-self-end mx-3"
        />
        <div
          class="flex-grow self-center font-light text-left col-span-2 w-60 lg:w-56"
          :class="{ 'text-xl': queryTablet, 'text-md': queryMobile }"
        >
          Via Pitagora, 69, 66054 Vasto CH
        </div>
      </div>
    </div>

    <!-- Mappa -->
    <div class="bg-white">
      <iframe
        class="shadow-lg mb-6"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4185.275976132437!2d14.703210646450747!3d42.11952658530392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1330ddb3244e5ccd%3A0x346b60805fcb287e!2sGeo%20Solution%20Studio%20di%20Geologia%20di%20Taddei%20Gianluca!5e0!3m2!1sit!2sit!4v1620675696385!5m2!1sit!2sit"
        width="100%"
        height="450"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
      ></iframe>
    </div>

    <!-- Contattami -->
    <div
      class="text-black bg-white grid justify-items-stretch"
      :class="{ 'text-xl': queryTablet, 'text-md': queryMobile }"
    >
      <!-- Title -->
      <div class="text-3xl font-bold mt-8 mb-3">
        {{ $t("home.contatti.title") }}
      </div>

      <!-- Telefono -->
      <div class="justify-self-center flex items-stretch my-6">
        <img
          src="~/assets/img/telefono.svg"
          alt="Logo Telefono"
          width="30px"
          class="inline-block mx-3"
        />
        <div
          class="flex-grow inline-block self-center font-light text-left col-span-2"
        >
          {{ $t("home.contatti.telefono") }}: 0873 363279
        </div>
      </div>

      <!-- Email -->
      <div class="flex items-stretch my-6 justify-self-center">
        <img
          src="~/assets/img/email.svg"
          alt="Logo Telefono"
          width="30px"
          class="mx-3 inline-block"
        />
        <div
          class="inline-block flex-grow self-center font-light text-left col-span-2"
        >
          {{ $t("home.contatti.email") }}: taddeigian@gmail.com
        </div>
      </div>

      <!-- Button Invia Email -->
      <div class="my-4 mb-12">
        <nuxt-link to="/contacts">
          <div class="btn p-3 mx-auto duration-150 shadow-lg">
            {{ $t("home.contatti.btn") }}
          </div>
        </nuxt-link>
      </div>
    </div>

    <!-- Separe Carosello -->
    <div class="bg-gray-700">
    <VueSlickCarousel v-bind="settings" :arrows="queryPc" :dots="true">
      <div>
        <img
          :src="require(`~/assets/img/slider-foto/${MediaQuery2}/slider-1.jpg`)"
          alt="Slider 1"  width="100%"
        />
      </div>
      <div>
        <img
          :src="require(`~/assets/img/slider-foto/${MediaQuery2}/slider-2.jpg`)"
          alt="Slider 2"  width="100%"
        />
      </div>
      <div>
        <img
          :src="require(`~/assets/img/slider-foto/${MediaQuery2}/slider-3.jpg`)"
          alt="Slider 3" width="100%"
        />
      </div>
    </VueSlickCarousel>

<div class="h-0 text-black">

</div>

    </div>



  </div>
</template>

<script>
import VueSlickCarousel from "vue-slick-carousel";

export default {
  data() {
    return {
      settings: {
        dots: true,
        dotsClass: "slick-dots custom-dot-class",
        edgeFriction: 0.35,
        speed: 600,
        slidesToShow: 1,
        slidesToScroll: 1,

        infinite: true,
        autoplay: true,
        autoplaySpeed: 6000,
        pauseOnDotsHover: true,
        pauseOnFocus: true,
        pauseOnHover: true,
      },
    };
  },
  components: { VueSlickCarousel },
  computed: {
    queryTablet() {
      switch (this.$mq) {
        case "sm":
          return false;
        case "md":
          return true;
        case "lg":
          return false;
      }
    },
    queryMobile() {
      switch (this.$mq) {
        case "sm":
          return true;
        case "md":
          return false;
        case "lg":
          return false;
      }
    },
    queryPc() {
      switch (this.$mq) {
        case "sm":
          return false;
        case "md":
          return false;
        case "lg":
          return true;
      }
    },
    MediaQuery() {
      switch (this.$mq) {
        case "sm":
          return "mobile";
        case "md":
          return "tablet";
        case "prelg":
          return "pc";
        case "lg":
          return "pc";
      }
    },
    MediaQuery2() {
      switch (this.$mq) {
        case "sm":
          return "mobile";
        case "md":
          return "pc";
        case "prelg":
          return "pc";
        case "lg":
          return "pc";
      }
    },
  },
  methods: {},
};
</script>

<style>
</style>
