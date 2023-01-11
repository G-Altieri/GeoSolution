<template>
  <div class="mx-auto text-white grid grid-cols-1 text-center bg-white">
    <!-- Immagine di Copertina -->
    <div>
      <img
        :src="require(`~/assets/img/home-img-1-${MediaQuery}.jpg`)"
        alt="Copertina GeoSolution"
        class="noImgSelect"
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
      class="bg-black"
    >
      <!-- Prima il piccone-->
      <div
        class="my-24"
        id="primaIllustration"
        v-waypoint="{ active: true, callback: onWaypointGeneral }"
      >
        <img
          src="~/assets/img/piccone.svg"
          alt="Piccole"
          class="mx-auto noImgSelect"
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
      <div
        class="my-24"
        id="secondaIllustration"
        v-waypoint="{ active: true, callback: onWaypointGeneral }"
      >
        <img
          src="~/assets/img/alberi.svg"
          alt="Piccole"
          class="mx-auto noImgSelect"
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
      <div
        class="my-24"
        id="terzaIllustration"
        v-waypoint="{ active: true, callback: onWaypointGeneral }"
      >
        <img
          src="~/assets/img/earth.svg"
          alt="Piccole"
          class="mx-auto noImgSelect"
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
        class="w-full noImgSelect"
      />
    </div>

    <!-- Portfolio -->
    <div class="bg-white text-black">
      <!-- Title Portfolio-->
      <div
        class="text-4xl font-semibold my-20"
      >
      <div id="titlePortfolio"
        v-waypoint="{ active: true, callback: onWaypointGeneral }">
        {{ $t("home.portfolio.title") }}
      </div>
        <!-- Content Text -->
        <div
          class="text-2xl font-light px-6 my-6"
          id="portfolioContent"
          v-waypoint="{ active: true, callback: onWaypointGeneral }"
        >
          {{ $t("home.illutration.portfolio1") }}
          <b class="font-semibold"> {{ $t("home.illutration.portfolio2") }}</b>
        </div>
      </div>


      <!-- Animazioni Numeri aziendali -->
      <div
        class="my-12 mb-12 text-center w-full gap-4 grid grid-cols-1 md:grid-cols-3 flex items-center bg-white text-black"
        v-waypoint="{ active: true, callback: scrollAnimIndex }"
      >
        <!-- Element 1 -->
        <div class="grid grid-row-3 gap-4 my-8">
          <!-- Illustration 1 -->
          <div class="justify-center flex">
            <img
              src="~/assets/img/2021.svg"
              alt="Logo Telefono"
              width="60px"
              class="self-center min30 noImgSelect"
            />
          </div>
          <!-- Title 1 -->
          <div class="text-2xl">{{ $t("home.portfolio.content1") }}</div>
          <!-- 1 -->
          <div class="text-5xl text-center flex inline-flex">
            <div class="flex-auto text-right">+</div>
            <div id="num1" class="flex-auto text-left">x</div>
          </div>
        </div>

        <!-- Element 2 -->
        <div class="grid grid-row-2 gap-4 my-4">
          <!-- Illustration 2 -->
          <div class="justify-center flex">
            <img
              src="~/assets/img/elmetto.svg"
              alt="Logo Telefono"
              width="60px"
              class="self-center min30 noImgSelect"
            />
          </div>
          <!-- Title 2 -->
          <div class="text-2xl">{{ $t("home.portfolio.content2") }}</div>
          <!-- 2 -->
          <div class="text-5xl text-center flex inline-flex">
            <div class="flex-auto text-right">+</div>
            <div id="num2" class="flex-auto text-left">x2</div>
          </div>
        </div>
        <!-- Element 3 -->
        <div class="grid grid-row-2 gap-4 my-4">
          <!-- Illustration 3 -->
          <div class="justify-center flex">
            <img
              src="~/assets/img/clientiSoddisfatti.svg"
              alt="Logo Telefono"
              width="60px"
              class="self-center min30 noImgSelect"
            />
          </div>
          <!-- Title 3 -->
          <div class="text-2xl">{{ $t("home.portfolio.content3") }}</div>
          <!-- 3 -->
          <div class="text-5xl text-center flex inline-flex">
            <div class="flex-auto text-right">+</div>
            <div id="num3" class="flex-auto text-left">x3</div>
          </div>
        </div>
      </div>
      <!-- Fine Portfolio Content -->

      <!-- Scopri di piu Portfolio-->
      <div class="mb-10 mx-auto">
        <nuxt-link to="/portfolio">
          <div class="btn2 p-3 mx-auto duration-300 shadow-lg">
            {{ $t("home.btn2") }}
          </div>
        </nuxt-link>
      </div>
    </div>
    <!-- Fine portafolio -->

    <!-- Separe Fossil Illustration Home -->
    <div class="">
      <img
        :src="require(`~/assets/img/illustration_fossil-${MediaQuery}.svg`)"
        alt="illustration_fossil"
        width="100%"
        style="transform: translateY(1px)"
        class="noImgSelect"
      />
    </div>

    <!-- Servizi -->
    <!-- Container servizi e portfolio -->
    <div class="bg-black text-white">
      <!-- Title Service-->
      <div
        class="text-4xl font-semibold mt-10 mb-12"
        v-waypoint="{ active: true, callback: onWaypointGeneral }"
        id="serviceTitle"
      >
        {{ $t("home.service.title") }}
      </div>

      <!-- Content Service Index -->
      <div
        class="text-white text-2xl font-nomal my-4 px-4 md:px-6 lg:px-12 mx-auto"
        v-waypoint="{ active: true, callback: onWaypointGeneral }"
        id="serviceContent"
      >
        {{ $t("home.service.content") }}
      </div>

      <!-- grid img service -->
      <div
        class="my-14 mb-12 mx-auto text-center gap-6 justify-items-center w-3/4 lg:w-2/3 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5"
        id="indexService"
        v-waypoint="{ active: true, callback: onWaypointGeneral }"
      >
        <serviceIndex width="100" img="geologiche" />
        <serviceIndex width="100" img="idrogeologiche" />
        <serviceIndex width="100" img="sondaggi" />
        <serviceIndex width="100" img="medie" />
        <serviceIndex width="100" img="masw" />
        <serviceIndex width="100" img="ambiente" />
        <serviceIndex width="100" img="scavo" />
        <serviceIndex width="100" img="maps" />
        <serviceIndex width="100" img="pozzo" />
        <serviceIndex
          width="90"
          img="acqua"
          classAdd="col-span-1 md:col-span-3 lg:col-span-1 noImgSelect"
        />
      </div>

      <!-- Scopri di piu -->
      <div class="my-2 mb-20 mx-auto">
        <nuxt-link to="/service">
          <div class="btn2 p-3 mx-auto duration-300 shadow-lg">
            {{ $t("home.btn2") }}
          </div>
        </nuxt-link>
      </div>
    </div>
    <!-- Fine Servizi -->

    <!-- Separe Carosello -->
    <div class="bg-white">
      <VueSlickCarousel v-bind="settings" :arrows="queryPc" :dots="true">
        <div>
          <img
            :src="
              require(`~/assets/img/slider-foto/${MediaQuery2}/slider-1.jpg`)
            "
            alt="Slider 1"
            width="100%"
            class="noImgSelect"
          />
        </div>
        <div>
          <img
            :src="
              require(`~/assets/img/slider-foto/${MediaQuery2}/slider-2.jpg`)
            "
            alt="Slider 2"
            width="100%"
            class="noImgSelect"
          />
        </div>
        <div>
          <img
            :src="
              require(`~/assets/img/slider-foto/${MediaQuery2}/slider-3.jpg`)
            "
            alt="Slider 3"
            width="100%"
            class="noImgSelect"
          />
        </div>
      </VueSlickCarousel>
    </div>
    <!-- Fine carosello -->

    <!-- Contattami -->
    <div
      class="text-black bg-white grid justify-items-stretch"
      :class="{ 'text-xl': queryTablet, 'text-md': queryMobile }"
    >
      <!-- Title -->
      <div
        class="text-3xl lg:text-4xl font-bold mt-12 mb-4"
        v-waypoint="{ active: true, callback: onWaypointGeneral }"
        id="titleContattami"
      >
        {{ $t("home.contatti.title") }}
      </div>
    </div>
    <!-- Container Contatti -->
    <div class="w-full grid grid-cols-1 mx-auto bg-white text-black">
      <!-- Telephone -->
      <div
        class="text-lg md:text-xl text-center flex items-stretch inline-flex my-6"
        v-waypoint="{ active: true, callback: onWaypointGeneral }"
        id="telephoneContattami"
      >
        <div class="flex-auto float-right">
          <img
            src="~/assets/img/telefono.svg"
            alt="Logo Telefono"
            width="30px"
            class="float-right self-center min30 noImgSelect"
          />
        </div>
        <div class="flex-auto text-left self-center mx-6"><a href="tel:+393478523830">  347 852 3830 </a></div>
      </div>
 <!-- Button Contatti per whatapp -->
          <div class="mx-auto my-0 mb-12 justify-self-center">
            <a
              href="https://wa.me/393478523830?text=Vorrei%20avere%20un%20informazione"
            >
              <div
                style="border-radius: 25px"
                class="
                  text-white
                  p-2
                  px-3
                  font-bold
                  uppercase
                  text-sm
                  w-max
                  btnShadow
                  duration-300
                  mx-auto
                  flex flex-inizial
                  items-center
                  bg-green-500
                "
              >
                Scrivici su WhatApp
                <svg
                  viewBox="0 0 32 32"
                  class="whatsapp-ico flex flex-auto items-center"
                  width="32px"
                >
                  <path
                    d=" M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z"
                    fill="white"
                  ></path>
                </svg>
              </div>
            </a>
          </div>
      <!-- Email -->
      <div
        class="text-lg md:text-xl text-center flex items-stretch inline-flex mb-6"
        v-waypoint="{ active: true, callback: onWaypointGeneral }"
        id="emailContattami"
      >
        <div class="flex-auto float-right">
          <img
            src="~/assets/img/email.svg"
            alt="Logo Telefono"
            width="30px"
            class="float-right self-center min30 noImgSelect"
          />
        </div>
        <div class="flex-auto text-left self-center mx-6">
          taddeigian@gmail.com
        </div>
      </div>

      <!-- Button Invia Email -->
      <div class="mb-12">
        <nuxt-link to="/contacts">
          <div
            class="btn p-2 mx-auto duration-150 shadow-lg"
            style="width: 190px"
          >
            {{ $t("home.contatti.btn") }}
          </div>
        </nuxt-link>
      </div>
    </div>

    <!-- Dove siamo -->
    <div class="bg-white text-black">
      <!-- Title -->
      <div
        class="text-3xl lg:text-4xl font-bold mt-8 mb-4"
        v-waypoint="{ active: true, callback: onWaypointGeneral }"
        id="titleDoveSiamo"
      >
        {{ $t("home.dovesiamo") }}
      </div>
      <!-- Gps -->
      <div
        class="text-lg md:text-xl text-center items-stretch flex inline-flex my-6"
        v-waypoint="{ active: true, callback: onWaypointGeneral }"
        id="dovesiamo"
      >
        <div class="flex-auto float-right">
          <img
            src="~/assets/img/gps.svg"
            alt="Logo Telefono"
            width="30px"
            class="float-right self-center min30 noImgSelect"
          />
        </div>
        <div class="flex-auto text-left mx-6 self-center">
         Via del Porto 100/u, 66054 Vasto CH
        </div>
      </div>
    </div>

    <!-- Mappa -->
    <div class="bg-black lg:mt-4 mb-12">
      <iframe
        class="shadow-lg"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4185.275976132437!2d14.703210646450747!3d42.11952658530392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1330ddb3244e5ccd%3A0x346b60805fcb287e!2sGeo%20Solution%20Studio%20di%20Geologia%20di%20Taddei%20Gianluca!5e0!3m2!1sit!2sit!4v1620675696385!5m2!1sit!2sit"
        width="100%"
        height="450"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
      ></iframe>
    </div>
  </div>
</template>

<script>
import VueSlickCarousel from "vue-slick-carousel";
import serviceIndex from "@/components/service_index.vue";
var anime1;
var anime2;
var anime3;
var animeGeneral;
export default {
  data() {
    return {
      anima1OneShot: false,
      arrayAnimation: {
        primaIllustration: true,
        secondaIllustration: true,
        terzaIllustration: true,

        titlePortfolio: false,
        portfolioContent: false,
        titleDoveSiamo: false,
        dovesiamo: false,
        titleContattami: false,
        serviceTitle: false,
        serviceContent: false,
        indexService: false,
        telephoneContattami: false,
        emailContattami: false,
      },

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
  components: { VueSlickCarousel, serviceIndex },
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
  methods: {
    scrollAnimIndex({ going, direction }) {
      // console.log("Scroll1");
      if (this.anima1OneShot == false) {
        if (direction != undefined) {
          anime1.play();
          anime2.play();
          anime3.play();
          this.anima1OneShot = true;
        }
      }
    },

    //***TEST */

    onWaypointGeneral({ el, going, direction }) {
      // going: in, out
      // direction: top, right, bottom, left

      //Controllo se l elemento e presente nelle animazioni
      if (el.id in this.arrayAnimation) {
        //se si controllo che non sia stato animato
        if (this.arrayAnimation[el.id] == false) {
          //se non e stato animato controllo che non sia il primo caricamento
          if (direction != undefined) {
            //se non e il primo caricamento lo animo
            this.animationGeneral(el.id);
            //se animato no lo animo piu
            var mykey = el.id;
            this.arrayAnimation[mykey] = true;
          } else {
          } //controllo primo caricamento
        } else {
        } //controllo se animato
      } else {
      } //controllo se presente nel array
    },

    ////****/TESTTTTTT */
    animationGeneral(x) {
      animeGeneral = this.$anime({
        targets: "#" + x,
        opacity: ["0", "1"],
        translateY: ["20", "0"],
        easing: "easeInOutExpo",
        duration: 1000,
        loop: false,
        autoplay: true,
        complete: () => {},
      });
    },
  },

  mounted() {
    anime1 = this.$anime({
      targets: "#num1",
      innerHTML: [0, 18],
      round: 1,
      easing: "easeInOutExpo",
      duration: 4000,
      loop: false,
      autoplay: false,
      complete: () => {},
    });
    anime2 = this.$anime({
      targets: "#num2",
      innerHTML: [0, 1000],
      round: 1,
      easing: "easeInOutExpo",
      duration: 4000,
      loop: false,
      autoplay: false,
      complete: () => {},
    });
    anime3 = this.$anime({
      targets: "#num3",
      innerHTML: [0, 150],
      round: 1,
      easing: "easeInOutExpo",
      duration: 4000,
      loop: false,
      autoplay: false,
      complete: () => {},
    });
  },
};
</script>




<style>
</style>
