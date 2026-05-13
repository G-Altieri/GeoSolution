<template>
  <div class="mx-auto text-white grid grid-cols-1 text-center bg-white">
    <!-- Immagine di Copertina -->
    <section class="home-cover" ref="homeCover">
      <div class="home-cover__sticky">
        <img
          :src="require(`~/assets/img/home-img-1-${MediaQuery}.jpg`)"
          alt="Copertina GeoSolution"
          class="home-cover__image noImgSelect"
          :style="coverImageStyle"
        />
        <div class="home-cover__shade" :style="coverShadeStyle">
          <div class="home-cover__content" :style="coverContentStyle">
            <div class="home-cover__glass">
              <div class="home-cover__kicker">Studio di geologia</div>
              <h1>GeoSolution</h1>
              <p>
                Consulenza ambientale e supporto geologico per progettazione,
                cantieri e territorio.
              </p>
              <div class="home-cover__actions">
                <nuxt-link
                  to="/service"
                  class="home-cover__btn home-cover__btn--primary"
                >
                  {{ $t("home.service.title") }}
                </nuxt-link>
                <nuxt-link
                  to="/contacts"
                  class="home-cover__btn home-cover__btn--secondary"
                >
                  {{ $t("home.contatti.title") }}
                </nuxt-link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

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
      class="bg-black home-intro-text"
    >
      <!-- Prima il piccone-->
      <div
        class="my-24 home-intro-text__item"
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
        class="my-24 home-intro-text__item"
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
        class="my-24 home-intro-text__item"
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
      coverScroll: 0,
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
    experienceYears() {
      const startYear = 2005;
      return new Date().getFullYear() - startYear + 1;
    },
    coverImageStyle() {
      const blur = this.coverScroll * 10;
      const scale = 1 + this.coverScroll * 0.035;
      return {
        filter: "blur(" + blur + "px)",
        transform: "scale(" + scale + ")",
      };
    },
    coverShadeStyle() {
      return {
        opacity: 0.08 + this.coverScroll * 0.82,
      };
    },
    coverContentStyle() {
      const opacity = Math.max(0, (this.coverScroll - 0.16) / 0.64);
      const translateY = 34 - opacity * 34;
      return {
        opacity: opacity,
        transform: "translateY(" + translateY + "px)",
      };
    },
  },
  methods: {
    updateCoverScroll() {
      if (!this.$refs.homeCover || typeof window === "undefined") {
        return;
      }

      const coverTop = this.$refs.homeCover.offsetTop;
      const coverHeight = this.$refs.homeCover.offsetHeight - window.innerHeight;
      const rawProgress = (window.scrollY - coverTop) / Math.max(coverHeight, 1);
      this.coverScroll = Math.min(Math.max(rawProgress, 0), 1);
    },
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
    this.updateCoverScroll();
    window.addEventListener("scroll", this.updateCoverScroll, { passive: true });
    window.addEventListener("resize", this.updateCoverScroll);

    anime1 = this.$anime({
      targets: "#num1",
      innerHTML: [0, this.experienceYears],
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
  beforeDestroy() {
    window.removeEventListener("scroll", this.updateCoverScroll);
    window.removeEventListener("resize", this.updateCoverScroll);
  },
};
</script>




<style>
.home-cover {
  position: relative;
  min-height: 620px;
  overflow: hidden;
  background: #000;
}

.home-cover__sticky {
  position: sticky;
  top: 0;
  height: calc(100vh - 56px);
  min-height: 520px;
  overflow: hidden;
}

.home-cover__image {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
  transform-origin: center;
  transition: filter 80ms linear, transform 80ms linear;
}

.home-cover__shade {
  position: absolute;
  inset: 0;
  display: flex;
  align-items: flex-end;
  justify-content: center;
  padding: 42px 22px;
  background: linear-gradient(
    180deg,
    rgba(0, 0, 0, 0.16) 0%,
    rgba(0, 0, 0, 0.42) 48%,
    rgba(0, 0, 0, 0.78) 100%
  );
}

.home-cover__content {
  width: 100%;
  max-width: 920px;
  color: #fff;
  text-align: left;
  transition: opacity 80ms linear, transform 80ms linear;
}

.home-cover__glass {
  display: inline-block;
  max-width: 720px;
  padding: 0;
  text-shadow: 0 2px 22px rgba(0, 0, 0, 0.78);
}

.home-cover__kicker {
  margin-bottom: 10px;
  color: rgba(255, 255, 255, 0.76);
  font-size: 0.9rem;
  font-weight: 600;
  letter-spacing: 0;
  text-transform: uppercase;
}

.home-cover h1 {
  margin: 0;
  font-size: 4.3rem;
  line-height: 1;
  font-weight: 700;
  letter-spacing: 0;
}

.home-cover p {
  max-width: 620px;
  margin: 18px 0 0;
  color: rgba(255, 255, 255, 0.86);
  font-size: 1.12rem;
  line-height: 1.65;
  font-weight: 300;
}

.home-cover__actions {
  display: flex;
  flex-wrap: wrap;
  gap: 12px;
  margin-top: 28px;
}

.home-cover__btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  min-width: 172px;
  min-height: 46px;
  padding: 12px 22px;
  border-radius: 8px;
  font-size: 0.9rem;
  font-weight: 700;
  text-transform: uppercase;
  transition: transform 180ms ease, background 180ms ease, color 180ms ease;
}

.home-cover__btn:hover {
  transform: translateY(-2px);
}

.home-cover__btn--primary {
  color: #111;
  background: #fff;
}

.home-cover__btn--secondary {
  color: #fff;
  border: 1px solid rgba(255, 255, 255, 0.58);
  background: rgba(255, 255, 255, 0.08);
}

@media (max-width: 768px) {
  .home-cover {
    height: 122vh;
    min-height: 660px;
  }

  .home-cover__sticky {
    height: calc(100vh - 56px);
    min-height: 560px;
  }

  .home-cover__shade {
    align-items: flex-end;
    padding: 34px 18px;
  }

  .home-cover__content {
    text-align: center;
  }

  .home-cover__glass {
    display: block;
    padding: 0;
  }

  .home-cover h1 {
    font-size: 3rem;
  }

  .home-cover p {
    margin-right: auto;
    margin-left: auto;
    font-size: 1rem;
  }

  .home-cover__actions {
    justify-content: center;
  }

  .home-cover__btn {
    width: 100%;
    max-width: 290px;
  }
}

.home-intro-text {
  display: grid;
  gap: 18px;
  padding-top: 72px;
  padding-bottom: 76px;
}

.home-intro-text__item {
  max-width: 760px;
  margin-top: 0 !important;
  margin-bottom: 0 !important;
  margin-right: auto;
  margin-left: auto;
  padding: 22px 0;
}

.home-intro-text__item img {
  margin-bottom: 18px;
}

.home-intro-text__item .text-white {
  max-width: 720px;
  margin: 0 auto;
  line-height: 1.65;
}

@media (min-width: 1024px) {
  .home-intro-text {
    padding-top: 84px;
    padding-bottom: 88px;
  }
}

@media (max-width: 768px) {
  .home-intro-text {
    padding-top: 56px;
    padding-bottom: 60px;
  }

  .home-intro-text__item {
    padding: 18px 0;
  }
}
</style>
