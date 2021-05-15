<template>
  <!-- <div
    class="text-center bgFooter bg-green-500 flex items-stretch w-full grid text-white"
  >
    <div class="self-center  h-40 bg-gradient-to-b from-gray-700 to-black ">Footer</div>
  </div> -->
  <div>
    <div class="w-full bg-black bgFooter">
      <div v-if="$nuxt.$route.path == '/'" class="bg-black ">
        <img
          :src=" require(`~/assets/img/footer2-${mobile}.jpg`)"
          alt="footer img"
          width="100%"
          class=""
          :class="{ indexT: $nuxt.$route.path == '/' }"
        />
      </div>
      <div v-else>
        <img
          :src=" require(`~/assets/img/footer-${mobile}.jpg`)"
          alt="footer img"
          width="100%"
          class=""
          :class="{ indexT: $nuxt.$route.path == '/' }"
        />
      </div>
    </div>
  </div>
</template>

<script>

export default {
  data() {
    return {

    }
  },
  components: { },
  computed: {

  },
  props:{
    mobile: {
      type: String,
      default: "",
    },
  },
  methods: {
 
  },

  mounted() {
   
  },
};
</script>






<style>
.bgFooter {
  /* bottom: 0; */
  background: #1e1f23;
  /*position: absolute;*/
}
.indexT {
  transform: translateY(-7px);
  /*height: calc(100%+7px);*/
}
</style>