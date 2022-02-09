<template>
  <div class="mx-auto text-black grid grid-cols-1 text-center bg-white">
    <div class="text-4xl font-semibold mt-24 mb-4">
      {{ $t("contacts.title") }}
    </div>

    <div class="grid grid-cols-1 mx-auto w-3/4 max-w-md" style="">
      <div class="my-4">
        <ginput
          :text="$t('contacts.form.name')"
          id="sendName"
          name="sendName"
          type="text"
          v-model="form.name"
          :errorMsg="error_name"
        />
      </div>
      <div class="my-4">
        <ginput
          :text="$t('contacts.form.email')"
          id="sendEmail"
          name="sendEmail"
          type="email"
          v-model="form.email"
          :errorMsg="error_email"
        />
      </div>
      <div class="my-4">
        <ginput
          :text="$t('contacts.form.message')"
          id="sendMessage"
          name="sendMessage"
          type="textarea"
          v-model="form.message"
          :errorMsg="error_message"
        />
      </div>

      <div class="my-4 mb-12 cursor-pointer pointer">
        <div class="btn p-3 mx-auto duration-150 shadow-lg" @click="invioMsg()">
          <!-- In caso di loading -->
          <div
            v-if="loading"
            class="grid grid-cols-3 flex items-stretch justify-items-stretch"
          >
            <!-- Cerchio Loading -->
            <svg
              class="
                animate-spin
                -ml-1
                mr-3
                h-5
                w-5
                self-center
                justify-self-center
              "
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
            >
              <circle
                class="opacity-25"
                cx="12"
                cy="12"
                r="10"
                stroke-width="4"
                stroke="black"
              ></circle>
              <path
                class="opacity-75"
                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
                fill="black"
              ></path>
            </svg>
            Loading
          </div>
          <!-- Prima che vienie inviata la richiesta -->
          <div v-else>
            {{ $t("contacts.form.btn") }}
          </div>
        </div>
      </div>
    </div>

    <!-- Contattami -->
    <div
      class="text-black bg-white grid justify-items-center text-md md:text-xl"
    >
      <!-- Title -->
      <div class="text-3xl font-bold mt-8 mb-3">
        {{ $t("contacts.contatti") }}
      </div>

      <!-- Container Contatti -->
      <div class="grid-cols-6 grid gap-6 mt-4 mb-12">
        <!-- Telephone -->
        <img
          src="~/assets/img/telefono.svg"
          alt="Logo Telefono"
          width="30px"
          class="justify-self-end col-start-2 col-end-2"
        />
        <div
          class="
            flex-grow flex-shrink
            col-start-3 col-end-6 col-span-2
            self-center
            font-light
            text-left
          "
        >
          {{ $t("home.contatti.telefono") }}: <a href="tel:+393478523830">  347 852 3830 </a>
        </div>
        
        <!-- Email -->
        <img
          src="~/assets/img/email.svg"
          alt="Logo Telefono"
          width="30px"
          class="inline-block justify-self-end col-start-2 col-end-2"
        />
        <div
          class="
            inline-block
            flex-grow
            self-center
            col-start-3 col-end-6 col-span-3
            font-light
            text-left
            col-span-2
          "
        >
          {{ $t("home.contatti.email") }}: taddeigian@gmail.com
        </div>
        <!-- GPS -->
        <img
          src="~/assets/img/gps.svg"
          alt="Logo GPS"
          width="30px"
          class="justify-self-end col-start-2 col-end-2"
        />
        <div
          class="
            flex-grow
            self-center
            font-light
            col-start-3 col-end-6 col-span-2
            text-left
            col-span-2
            w-60
            lg:w-56
            text-md
            md:text-xl
          "
        >
           Via del Porto 100/u, 66054 Vasto CH
        </div>
      </div>

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
import ginput from "@/components/ginput.vue";

export default {
  data() {
    return {
      form: {
        name: "",
        email: "",
        message: "",
      },
      error_name: "",
      error_email: "",
      error_message: "",
      msg_default: "",
      loading: false,
    };
  }, //data
  components: {
    ginput,
  },
  methods: {
    richiestaInvio() {
      this.loading = true;
      Email.send({
        Host: "smtp.elasticemail.com",
        Username: "lucazzottifrancesco@gmail.com",
        Password: "92724ABAEB882C2F7B8769B5E4352E2B39C1",
        To: "peroniciro@gmail.com",
        From: "lucazzottifrancesco@gmail.com",
        Subject: "Contatto dal sito GeoSolution",
        Body:
          "Nome: " +
          this.form.name +
          " Email: " +
          this.form.email +
          " Messaggio: " +
          this.form.message,
      })
        .then((message) => {
          this.loading = false;
          console.log("Email Inviata 1 " + message);
        })
        .catch((error) => {
          this.loading = false;
          console.log("Request canceled", error);
        });
    },
    richiestaInvio() {
      this.loading = true;
      Email.send({
        Host: "smtp.elasticemail.com",
        Username: "lucazzottifrancesco@gmail.com",
        Password: "92724ABAEB882C2F7B8769B5E4352E2B39C1",
        To: "taddeigian@gmail.com",
        From: "lucazzottifrancesco@gmail.com",
        Subject: "Contatto dal sito GeoSolution",
        Body:
          "Nome: " +
          this.form.name +
          " Email: " +
          this.form.email +
          " Messaggio: " +
          this.form.message,
      })
        .then((message) => {
          this.loading = false;
          console.log("Email Inviata 2 " + message);
        })
        .catch((error) => {
          this.loading = false;
          console.log("Request canceled", error);
        });
    },

    invioMsg() {
      let x = this.controlloForm();

      if (x) {
        this.richiestaInvio();
      } else {
      }
    },
    controlloForm() {
      let x;
      if (
        this.form.name == null ||
        this.form.name == undefined ||
        this.form.name == ""
      ) {
        this.error_name = "Inserisci un Nome";
        x = true;
      }
      if (
        this.form.email == null ||
        this.form.email == undefined ||
        this.form.email == ""
      ) {
        this.error_email = "Inserisci un Email valida";
        x = true;
      }
      if (
        this.form.message == null ||
        this.form.message == undefined ||
        this.form.message == ""
      ) {
        this.msg_default = "Nessun messaggio scritto da parte dell' utente";
        x = true;
      }
      if (x) {
      }
      return true;
    },
  },
};

/*
  richiestaInvio() {
        //http://www.monicacentri.com/triniamajor/geosolution/install.php
        //https://www.monicacentri.com/BackEnd/BackEndMonicaCentri/public/api/testdb
        const axios = require("axios");
        this.loading = true;
        axios
          .post(
            "https://www.monicacentri.com/triniamajor/geosolution/install.php",
            {
              name: this.form.name,
              email: this.form.email,
              message: this.form.message,
            },
            {
              headers: {},
            }
          )
          .then((response) => {
            console.log("Registrazione Effettuata:");
            this.loading = false;
            console.log(response);
            console.log(response.data);
          })
          .catch((error) => {
            this.loading = false;
            if (this.$axios.isCancel(error)) {
              console.log("Request canceled", error);
            } else {
            }
          });
      },
  
  */
</script>

<style>
.testBg {
  /*background-image: url("~assets/img/a.jpg");*/
  background-repeat: no-repeat;
  background-size: initial;
  background-attachment: fixed;
  background-position: center;
  width: 100%;
  height: 100px;
}
</style>
