<template>
  <div>
    <!-- v-bind:class="{ 'invisible':!scrollUp}" -->
    <div class="mx-auto relative w-full h-14 bg-white z-50" id="navBar">
      <!-- Container NavBar -->
      <div class="flex" v-bind:class="{ 'mx-2': mquery, 'mx-7': !mquery }">
        <!-- Logo -->

        <div class="flex-none text-left grid" @click="navClick()">
          <nuxt-link to="/" class="self-center justify-self-start">
            <img
              src="~assets/img/logo-black.svg"
              alt="Logo GeoSolution"
              width="40px"
              class="self-center justify-self-start"
            />
          </nuxt-link>
        </div>

        <!-- Title GeoSolution -->

        <div class="flex-grow text-center grid h-14" @click="navClick()">
          <nuxt-link
            to="/"
            class="self-center text-center justify-self-center logo-centraln"
          >
            <svg
              id="logo"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 1603.67 217.08"
              :style="{ width: mqueryTitle + 'px' }"
              class="self-center text-center justify-self-center logo-centraln"
            >
              <path
                class="cls-1"
                d="M156.14,76.54a58.3,58.3,0,0,0-22.59-25.42q-14.79-9-34.42-9a70,70,0,0,0-35.37,9A63.65,63.65,0,0,0,39,76.94q-9,16.82-9,38.86t9,38.72a63.81,63.81,0,0,0,24.74,25.69,69.86,69.86,0,0,0,35.37,9q27.42,0,45.18-16.41T165,128.44H90.25v-19.9H191.1v18.82a93.23,93.23,0,0,1-14.52,42.36A89.81,89.81,0,0,1,144,200.11q-20.17,11.16-44.91,11.16A94.6,94.6,0,0,1,51.52,199a89.68,89.68,0,0,1-34-34Q5,143.23,5,115.8T17.51,66.45a89.54,89.54,0,0,1,34-34.15A94.6,94.6,0,0,1,99.13,20.06Q129,20.06,152,34.85t33.48,41.69Z"
              />
              <path
                class="cls-1"
                d="M357,145.11H239.24q1.33,21.78,14.92,34t33,12.24q15.86,0,26.49-7.4a39.13,39.13,0,0,0,14.92-19.76h26.36a63.38,63.38,0,0,1-23.67,34.55q-17.74,13.32-44.1,13.32-21,0-37.52-9.42a66.56,66.56,0,0,1-26-26.76q-9.42-17.34-9.41-40.2t9.14-40.07a64.24,64.24,0,0,1,25.68-26.49q16.54-9.28,38.06-9.28,21,0,37.11,9.15A63.33,63.33,0,0,1,349.1,94.15q8.73,16,8.74,36.17A143.32,143.32,0,0,1,357,145.11Zm-30.66-44a40.27,40.27,0,0,0-16.81-15.33A52.48,52.48,0,0,0,286,80.57q-18.55,0-31.6,11.83t-14.92,32.81h93.05Q332.56,111.23,326.37,101.14Z"
              />
              <path
                class="cls-1"
                d="M416.87,202.66a66.9,66.9,0,0,1-26.36-26.76Q381,158.56,381,135.7q0-22.59,9.82-39.94a67.63,67.63,0,0,1,26.76-26.62q16.93-9.28,37.92-9.28t37.92,9.28a67.92,67.92,0,0,1,26.75,26.49Q530,112.84,530,135.7t-10.08,40.2a69.91,69.91,0,0,1-27.3,26.76,78.23,78.23,0,0,1-38.19,9.42A75.35,75.35,0,0,1,416.87,202.66Zm62.25-18.28a47.08,47.08,0,0,0,18.69-18.56q7.13-12.36,7.13-30.12t-7-30.12q-7-12.36-18.29-18.42a52.79,52.79,0,0,0-49.08,0q-11.16,6-17.88,18.42T406,135.7q0,18,6.59,30.39t17.62,18.42a49.49,49.49,0,0,0,24.2,6.05A51.72,51.72,0,0,0,479.12,184.38Z"
              />
              <path
                class="cls-1"
                d="M588.44,205q-14.66-6.58-23-18.29a46.86,46.86,0,0,1-8.61-27h26.09a34.28,34.28,0,0,0,10.89,22.19q9.54,9,27.83,9,17.49,0,27.57-8.74a28.37,28.37,0,0,0,10.09-22.46q0-10.74-5.92-17.48a37.88,37.88,0,0,0-14.79-10.21,231.56,231.56,0,0,0-23.94-7.54q-18.55-4.83-29.71-9.68a47.77,47.77,0,0,1-19.1-15.19q-7.94-10.35-7.93-27.84a48.24,48.24,0,0,1,7.8-27.16,50.8,50.8,0,0,1,21.92-18.28q14.11-6.46,32.4-6.46,26.36,0,43.16,13.18t19,35H655.27Q653.92,57.18,644,49t-26.36-8.2q-15.33,0-25,7.93t-9.68,22.19q0,10.22,5.78,16.67A37.31,37.31,0,0,0,603,97.38q8.47,3.36,23.8,7.66a223.22,223.22,0,0,1,29.86,10.09A49.85,49.85,0,0,1,676,130.46q8.07,10.35,8.07,28.1a49.38,49.38,0,0,1-7.26,25.82q-7.27,12.09-21.52,19.63t-33.62,7.53Q603.1,211.54,588.44,205Z"
              />
              <path
                class="cls-1"
                d="M746.84,202.66a67,67,0,0,1-26.36-26.76q-9.54-17.34-9.54-40.2,0-22.59,9.81-39.94a67.76,67.76,0,0,1,26.76-26.62q16.95-9.28,37.92-9.28t37.92,9.28a68,68,0,0,1,26.76,26.49q9.81,17.2,9.81,40.07t-10.08,40.2a69.78,69.78,0,0,1-27.3,26.76,78.2,78.2,0,0,1-38.19,9.42A75.38,75.38,0,0,1,746.84,202.66Zm62.26-18.28a47.21,47.21,0,0,0,18.69-18.56q7.11-12.36,7.12-30.12t-7-30.12a45.8,45.8,0,0,0-18.29-18.42,52.79,52.79,0,0,0-49.08,0q-11.16,6-17.88,18.42T736,135.7q0,18,6.59,30.39t17.61,18.42a49.52,49.52,0,0,0,24.2,6.05A51.73,51.73,0,0,0,809.1,184.38Z"
              />
              <path class="cls-1" d="M916.67,10.65v199H892.2v-199Z" />
              <path
                class="cls-1"
                d="M1089.05,62.28V209.66h-24.47V187.87a47.67,47.67,0,0,1-19.5,17.62,60.3,60.3,0,0,1-27.57,6.32,66.06,66.06,0,0,1-30.92-7.13,51.68,51.68,0,0,1-21.65-21.38Q957,169.05,957,148.61V62.28h24.21v83.1q0,21.78,11,33.48t30.12,11.7q19.64,0,30.93-12.1t11.3-35.23V62.28Z"
              />
              <path
                class="cls-1"
                d="M1160.31,82.45v86.87q0,10.76,4.58,15.19t15.86,4.44h18v20.71h-22q-20.45,0-30.66-9.42t-10.22-30.92V82.45h-19.09V62.28h19.09V25.17h24.47V62.28h38.46V82.45Z"
              />
              <path
                class="cls-1"
                d="M1229.16,33.51a16.09,16.09,0,0,1-4.84-11.84,16.08,16.08,0,0,1,4.84-11.83A16.08,16.08,0,0,1,1241,5a15.34,15.34,0,0,1,11.43,4.84,16.33,16.33,0,0,1,4.71,11.83,16.33,16.33,0,0,1-4.71,11.84A15.38,15.38,0,0,1,1241,38.35,16.12,16.12,0,0,1,1229.16,33.51Zm23.67,28.77V209.66h-24.48V62.28Z"
              />
              <path
                class="cls-1"
                d="M1321.27,202.66a66.9,66.9,0,0,1-26.36-26.76q-9.56-17.34-9.55-40.2,0-22.59,9.82-39.94a67.63,67.63,0,0,1,26.76-26.62q16.93-9.28,37.92-9.28t37.92,9.28a67.92,67.92,0,0,1,26.75,26.49q9.83,17.2,9.82,40.07t-10.08,40.2a69.91,69.91,0,0,1-27.3,26.76,78.23,78.23,0,0,1-38.19,9.42A75.35,75.35,0,0,1,1321.27,202.66Zm62.25-18.28a47.08,47.08,0,0,0,18.69-18.56q7.13-12.36,7.13-30.12t-7-30.12q-7-12.36-18.29-18.42a52.79,52.79,0,0,0-49.08,0q-11.16,6-17.88,18.42t-6.73,30.12q0,18,6.59,30.39t17.62,18.42a49.49,49.49,0,0,0,24.2,6.05A51.72,51.72,0,0,0,1383.52,184.38Z"
              />
              <path
                class="cls-1"
                d="M1582,75.86q16.68,16.27,16.68,46.93v86.87h-24.21V126.29q0-22-11-33.75t-30.12-11.7q-19.36,0-30.8,12.1t-11.42,35.23v81.49h-24.48V62.28h24.48v21a48.52,48.52,0,0,1,19.76-17.48,61.36,61.36,0,0,1,27.57-6.19Q1565.31,59.59,1582,75.86Z"
              />
            </svg>
          </nuxt-link>
        </div>

        <!-- Logo Menu -->
        <div
          class="flex-none grid text-right float-right h-14"
          style="width: 30px"
          :style="{ transform: 'translateX(' + queryMobile + 'px)' }"
        >
          <svg
            class="ham ham6 justify-self-end grid"
            viewBox="0 0 100 100"
            id="id-ham"
            :class="{ active: StatusMenu }"
            @click="changeMenu()"
          >
            <path
              class="line top"
              d="m 30,33 h 40 c 13.100415,0 14.380204,31.80258 6.899646,33.421777 -24.612039,5.327373 9.016154,-52.337577 -12.75751,-30.563913 l -28.284272,28.284272"
            />
            <path
              class="line middle"
              d="m 70,50 c 0,0 -32.213436,0 -40,0 -7.786564,0 -6.428571,-4.640244 -6.428571,-8.571429 0,-5.895471 6.073743,-11.783399 12.286435,-5.570707 6.212692,6.212692 28.284272,28.284272 28.284272,28.284272"
            />
            <path
              class="line bottom"
              d="m 69.575405,67.073826 h -40 c -13.100415,0 -14.380204,-31.80258 -6.899646,-33.421777 24.612039,-5.327373 -9.016154,52.337577 12.75751,30.563913 l 28.284272,-28.284272"
            />
          </svg>
        </div>
      </div>
      <!-- End Container Flex -->
    </div>
    <!-- Menu Overlay -->
    <div
      v-show="StatusMenu"
      class="w-full bg-black h-full fixed grid justify-items-center flex z-40"
      id="menuOver"
    >
      <div
        class="text-white text-4xl self-center font-medium text-center tracking-wide border-white"
        style="transform: translateY(-45px)"
      >
        <ul id="menu-down" class="" @click="clickLink()">
          <nuxt-link to="/" v-show="$nuxt.$route.path != '/'">
            <li id="el0" class="mb-4" @mouseover="hoverElement('el0')">
              Home
              <div class="line bg-white w-0 h-0.5"></div>
            </li>
          </nuxt-link>

          <nuxt-link to="/contacts" v-show="$nuxt.$route.path != '/contacts'">
            <li id="el1" class="mb-4" @mouseover="hoverElement('el1')">
              Contatti
              <div class="line bg-white w-0 h-0.5"></div>
            </li>
            <!-- border-white border-b-2 -->
          </nuxt-link>

          <nuxt-link to="/service" v-show="$nuxt.$route.path != '/service'">
            <li id="el2" class="mb-4" @mouseover="hoverElement('el2')">
              Servizi
              <div class="line bg-white w-0 h-0.5"></div>
            </li>
          </nuxt-link>

          <nuxt-link to="/portfolio" v-show="$nuxt.$route.path != '/portfolio'">
            <li id="el3" class="mb-4" @mouseover="hoverElement('el3')">
              Portfolio
              <div class="line bg-white w-0 h-0.5"></div>
            </li>
          </nuxt-link>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
var t1;
var t2;
var t3;
var t4;
export default {
  data() {
    return {
      StatusMenu: false,
      animeInCorso: false,
      open: false,
      scrollUp: true,
      lastScollPosition: 20,
    };
  },
  computed: {
    queryMobile() {
      switch (this.$mq) {
        case "sm":
          return 7;
        case "md":
          return 12;
        case "lg":
          return 12;
      }
    },
    mquery() {
      switch (this.$mq) {
        case "sm":
          return true;
        case "md":
          return false;
        case "lg":
          return false;
      }
    },
    mqueryTitle() {
      switch (this.$mq) {
        case "sm":
          return 210;
        case "md":
          return 240;
        case "lg":
          return 280;
      }
    },
  },

  mounted() {
    t1 = this.$anime.timeline({
      easing: "easeInOutCubic", //https://easings.net/it
      duration: 500,
      autoplay: false,
      complete: () => {
        //imposto l animazione finita
        this.animeInCorso = false;
        //reverso l animazione per il prossimo click
        t1.reverse();
        //se il menu e chiuso lo nascondo dal DOM
        if (!this.open) {
          this.StatusMenu = false;
          this.$store.commit("setStatus_menu", false);
        }
      },
    });
    //aniamzione del container del menu
    t1.add({
      targets: "#menuOver",
      height: ["0%", "100%"],
      opacity: "1",
    });

    //animazione del testo del menu
    t1.add(
      {
        targets: "#menu-down li",
        translateY: ["270", "0"],
        opacity: ["0", "1"],
        delay: this.$anime.stagger(100),
      },
      +200
    );

    /* t3 = this.$anime({
     targets: "#navBar",
      height: ["0px", "56px"],
      opacity: ["0", "1"],
      duration: 500,
      autoplay:false,
      complete: () => {
        
        }
    })
    t4 = this.$anime({
      targets: "#navBar",
      height: ["56px", "0px"],
      opacity: ["1","0"],
      duration: 500,
      autoplay:false,
      complete: () => {
        this.scrollUp=false;
      }
    })*/
  },
  /*
    created () {
          window.addEventListener('scroll', this.scrollNavBar);
        },
    destroyed () {
          window.removeEventListener('scroll', this.scrollNavBar);
        },*/

  methods: {
    /* scrollNavBar(){
      if(this.lastScollPosition>window.scrollY){
        console.log("apro")
        console.log(this.scrollUp)

      
          this.scrollUp=true;
          t3.play()
       
      }else{
        console.log("chiudo")
        console.log(this.scrollUp)
          t4.play()
         
      }
      this.lastScollPosition=window.scrollY
    },*/

    hoverElement(x) {
      if (x != t2) {
        this.$anime({
          targets: "#" + t2 + " .line",
          width: ["100%", "0%"],
          easing: "easeInOutQuad",
          duration: 500,
          complete: () => {},
        });
        this.$anime({
          targets: "#" + t2,
          translateY: ["0px", "0px"],
          easing: "easeInOutQuad",
          duration: 100,
          complete: () => {},
        });
        this.$anime({
          targets: "#" + x + " .line",
          width: ["0%", "100%"],
          easing: "easeInOutQuad",
          duration: 500,
          complete: () => {},
        });
        this.$anime({
          targets: "#" + x,
          translateY: ["0px", "0px"],
          easing: "easeInOutQuad",
          duration: 100,
          complete: () => {},
        });
      }

      t2 = x;
    },

    changeMenu() {
      if (!this.animeInCorso) {
        if (!this.open) {
          //faccio visulizzare subito il menu prima del animazione
          this.hoverElement(null);
          this.StatusMenu = true;
          this.$store.commit("setStatus_menu", true);

          //parte animazione apertura
          t1.play();
          this.animeInCorso = true;
          this.open = true;
        } else {
          //lo imposto a false per evitare il lampeggio, (soluzione trovata su git)
          t1.completed = false;
          t1.play();
          this.animeInCorso = true;
          this.open = false;
          this.hoverElement(null);
        }
      }
    },
    navClick() {
      if (this.StatusMenu) {
        this.clickLink();
      }
    },
    clickLink() {
      this.StatusMenu = false;
      this.changeMenu();
    },
  },
  components: {},
};
</script>


<style>
.ham {
  height: 100%;
  cursor: pointer;
  -webkit-tap-highlight-color: transparent;
  -webkit-transition: -webkit-transform 400ms;
  transition: -webkit-transform 400ms;
  transition: transform 400ms;
  transition: transform 400ms, -webkit-transform 400ms;
  -moz-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.hamRotate.active {
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}

.hamRotate180.active {
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
}

.line {
  fill: none;
  -webkit-transition: stroke-dasharray 400ms, stroke-dashoffset 400ms;
  transition: stroke-dasharray 400ms, stroke-dashoffset 400ms;
  stroke: #000;
  stroke-width: 4.5;
  stroke-linecap: round;
}

.ham6 .top {
  stroke-dasharray: 40 172;
}

.ham6 .middle {
  stroke-dasharray: 40 111;
}

.ham6 .bottom {
  stroke-dasharray: 40 172;
}

.ham6.active .top {
  stroke-dashoffset: -132px;
}

.ham6.active .middle {
  stroke-dashoffset: -71px;
}

.ham6.active .bottom {
  stroke-dashoffset: -132px;
}
</style>