<template>
  <div class="mx-auto text-black grid grid-cols-1 text-center bg-white">
    <div>
      <h1 class="w-full text-4xl font-lite my-20" id="titlePortfolio">
        Portfolio Aziende
      </h1>
    </div>

    <div
      class="grid grid-cols-1 lg:grid-cols-2 gap-y-10 justify-items-center"
      id="a1"
    >
      <!-- Aqualand -->
      <a
        href="https://www.aqualandvasto.com"
        class="btnPortfolio lg:w-7/12 w-3/4 md:w-7/12 rounded-2xl mx-auto"
        target="_blank"
      >
        <img
          src="~/assets/img/loghi aziende/aqualand.png"
          alt="Aqualand del Vasto"
          class="mx-auto"
          width="100%"
        />
      </a>

      <!-- Di fonzo -->
      <a
        class="btnPortfolio lg:w-7/12 w-3/4 md:w-7/12 rounded-2xl mx-auto"
        href="https://difonzobus.com"
        target="_blank"
      >
        <img
          src="~/assets/img/loghi aziende/di fonzo.png"
          alt="di fonzo"
          class="mx-auto"
          width="100%"
        />
      </a>

      <!-- enel-->
      <a
        class="btnPortfolio lg:w-7/12 w-3/4 md:w-7/12 rounded-2xl mx-auto"
        href="https://www.enel.it"
        target="_blank"
      >
        <img
          src="~/assets/img/loghi aziende/enel.png"
          alt="enel"
          class="mx-auto"
          width="100%"
        />
      </a>

      <!-- Energie Spa -->
      <a
        class="btnPortfolio lg:w-7/12 w-3/4 md:w-7/12 rounded-2xl mx-auto"
        href="http://www.energiaspa.eu"
        target="_blank"
      >
        <img
          src="~/assets/img/loghi aziende/energie_spa.png"
          alt="Enrgie Spa"
          class="mx-auto"
          width="100%"
        />
      </a>

      <!--gransolarghella -->
      <a
        class="btnPortfolio lg:w-7/12 w-3/4 md:w-7/12 rounded-2xl mx-auto"
        href="https://www.gransolarghella.com/"
        target="_blank"
      >
        <img
          src="~/assets/img/loghi aziende/gransolarghella.png"
          alt="gransolarghella"
          class="mx-auto"
          width="100%"
        />
      </a>

      <!-- gruppo de cinque -->
      <a
        class="btnPortfolio lg:w-7/12 w-3/4 md:w-7/12 rounded-2xl mx-auto"
        href="https://de5.it/"
        target="_blank"
      >
        <img
          src="~/assets/img/loghi aziende/gruppo de cinque.png"
          alt="gruppo de cinque"
          class="mx-auto"
          width="100%"
        />
      </a>

      <!-- hadri tanks -->
      <a
        class="btnPortfolio lg:w-7/12 w-3/4 md:w-7/12 rounded-2xl mx-auto"
        href="https://www.grupposolmar.it/aziende/hadri-tanks/"
        target="_blank"
      >
        <img
          src="~/assets/img/loghi aziende/hadri tanks.png"
          alt="hadri tanks"
          class="mx-auto"
          width="100%"
        />
      </a>

      <!-- puccioni -->
      <a
        class="btnPortfolio lg:w-7/12 w-3/4 md:w-7/12 rounded-2xl mx-auto"
        href="http://puccioni.it/"
        target="_blank"
      >
        <img
          src="~/assets/img/loghi aziende/puccioni.png"
          alt="puccioni"
          class="mx-auto"
          width="100%"
        />
      </a>

      <!-- sicilsaldo -->
      <a
        class="btnPortfolio lg:w-7/12 w-3/4 md:w-7/12 rounded-2xl mx-auto"
        href="http://www.sicilsaldo.it/"
        target="_blank"
      >
        <img
          src="~/assets/img/loghi aziende/sicilsaldo.png"
          alt="sicilsaldo"
          class="mx-auto"
          width="100%"
        />
      </a>
    </div>

    <!-- Comuni Title -->
    <div>
      <h1
        class="w-full text-4xl font-lite my-20"
        id="titleComuni"
        v-waypoint="{ active: true, callback: scrollAnimPortfolio }"
      >
        Comuni
      </h1>
    </div>

    <div
      class="grid grid-cols-1 lg:grid-cols-2 gap-y-10 justify-items-center"
      id="a2"
      href="https://www.comune.vasto.ch.it/"
      target="_blank"
    >
      <!-- Vasto  -->
      <a class="btnPortfolio lg:w-7/12 w-3/4 md:w-7/12 rounded-2xl mx-auto">
        <div class="text-2xl font-light">Vasto</div>
        <img
          src="~/assets/img/loghi aziende/vasto.png"
          alt="vasto"
          class="mx-auto"
          width="100%"
        />
      </a>

      <!-- tossicia  -->
      <a
        class="btnPortfolio lg:w-7/12 w-3/4 md:w-7/12 rounded-2xl mx-auto"
        href="http://www.comune.tossicia.te.it/"
        target="_blank"
      >
        <div class="text-2xl font-light">Tossicia</div>
        <img
          src="~/assets/img/loghi aziende/tossicia.png"
          alt="tossicia"
          class="mx-auto"
          width="100%"
        />
      </a>

      <!-- roccacasale  -->
      <a
        class="btnPortfolio lg:w-7/12 w-3/4 md:w-7/12 rounded-2xl mx-auto"
        href="http://www.roccacasale.gov.it/hh/index.php"
        target="_blank"
      >
        <div class="text-2xl font-light">Roccacasale</div>
        <img
          src="~/assets/img/loghi aziende/roccacasale.png"
          alt="roccacasale"
          class="mx-auto"
          width="100%"
        />
      </a>

      <!-- montedorisio  -->
      <a
        class="btnPortfolio lg:w-7/12 w-3/4 md:w-7/12 rounded-2xl mx-auto"
        href="http://www.comune.monteodorisio.ch.it/hh/index.php"
        target="_blank"
      >
        <div class="text-2xl font-light">Montedorisio</div>
        <img
          src="~/assets/img/loghi aziende/montedorisio.png"
          alt="montedorisio"
          class="mx-auto"
          width="100%"
        />
      </a>

      <!-- lentella  -->
      <a
        class="btnPortfolio lg:w-7/12 w-3/4 md:w-7/12 rounded-2xl mx-auto"
        href="http://comunedilentella.it/hh/index.php"
        target="_blank"
      >
        <div class="text-2xl font-light">Lentella</div>
        <img
          src="~/assets/img/loghi aziende/lentella.png"
          alt="guilmi"
          class="mx-auto"
          width="100%"
        />
      </a>

      <!-- guilmi  -->
      <a
        class="btnPortfolio lg:w-7/12 w-3/4 md:w-7/12 rounded-2xl mx-auto"
        href="https://www.comune.guilmi.ch.it/"
        target="_blank"
      >
        <div class="text-2xl font-light">Guilmi</div>
        <img
          src="~/assets/img/loghi aziende/guilmi.png"
          alt="guilmi"
          class="mx-auto"
          width="100%"
        />
      </a>
    </div>

    <div class="my-6"></div>
  </div>
</template>

<script>
var anime1;
export default {
  data() {
    return {
       anima1OneShot: false
        };
  },
  mounted() {
    //Aziende
    this.$anime({
      targets: "#a1 a",
      translateY: ["100px", "0px"],
      opacity: ["0", "1"],
      easing: "easeInOutCubic", //https://easings.net/it
      duration: 500,
      delay: 250,
      autoplay: true,
      delay: this.$anime.stagger(200),
      complete: () => {},
    });

    //Portfolio animation
    this.$anime({
      targets: "#titlePortfolio",
      translateX: ["100px", "0px"],
      opacity: ["0", "1"],
      easing: "easeInOutCubic", //https://easings.net/it
      duration: 500,
      delay: 750,
      autoplay: true,

      complete: () => {},
    });

    //Comuni
    anime1 = this.$anime
      .timeline({
        easing: "easeInOutCubic", //https://easings.net/it
        duration: 500,
        delay: 250,
        autoplay: false,
        delay: this.$anime.stagger(200),
        complete: () => {},
      })

    

    //Portfolio animation
    .add({
      targets: "#titleComuni",
      translateX: ["100px", "0px"],
      opacity: ["0", "1"],
      delay: 300,

    })
      .add({
        targets: "#a2 a",
        translateY: ["100px", "0px"],
        opacity: ["0", "1"],
      })
  },
  methods: {
    scrollAnimPortfolio({ going, direction }) {
      //Controllo animazione scroll
        console.log(this.anima1OneShot)
        console.log(direction)
      if (this.anima1OneShot == false) {
        if (direction != undefined && direction != "bottom") {
          anime1.play();
          console.log("play")
          this.anima1OneShot = true;
        }
      }
    },
  },
};
</script>

<style>
.btnPortfolio {
  /*box-shadow: 0px 5px 10px #0057ab; ombra vecchia scelta da noi*/
  -webkit-transition: transform 0.5s;
  -webkit-transition: background-color 0.5s ease;
  transition: background-color 0.5s ease;
  -webkit-transition: -webkit-transform 0.5s;
  transition: -webkit-transform 0.5s;
  transition: transform 0.5s;
  transition: transform 0.5s, -webkit-transform 0.5s;
  background: white;
  background: linear-gradient(45deg, white 35%, #f0efef 100%);
  /*background: #9D50BB;
    background: -webkit-linear-gradient(to right, #6E48AA, #9D50BB);
    background: linear-gradient(to right, #6E48AA, #9D50BB);*/
  -webkit-box-shadow: 0px 3px 7px 0px rgba(50, 50, 50, 0.22);
  box-shadow: 0px 3px 7px 0px rgba(50, 50, 50, 0.22);
}

.btnPortfolio:hover {
  -webkit-transition: transform 0.5s;
  -webkit-transition: -webkit-transform 0.5s;
  transition: -webkit-transform 0.5s;
  transition: transform 0.5s;
  transition: transform 0.5s, -webkit-transform 0.5s;
  background-color: white;
  /* background: #9D50BB;
    background: -webkit-linear-gradient(to left, #6E48AA, #9D50BB);
    background: linear-gradient(to left, #6E48AA, #9D50BB);*/
  -webkit-box-shadow: 0px 15px 25px -5px rgba(50, 50, 50, 0.23);
  box-shadow: 0px 15px 25px -5px rgba(50, 50, 50, 0.23);
  -webkit-transform: scale(1.03);
  transform: scale(1.03);
}

.btnPortfolio:active {
  -webkit-box-shadow: 0px 4px 8px rgba(50, 50, 50, 0.23);
  box-shadow: 0px 4px 8px rgba(50, 50, 50, 0.23);
  -webkit-transform: scale(0.98);
  transform: scale(0.98);
}
</style>