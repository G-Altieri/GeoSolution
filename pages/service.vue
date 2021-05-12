<template>
  <div>
    <div class="text-left text-xl lg:text-2xl bg-white w-full text-black px-6 my-8 mt-14">
      {{ $t("service.title") }}
    </div>

<div class="bg-white h-full pb-16">
    <div class="mx-auto grid grid-cols-1 gap-6 w-full px-6 mt-4" id="containerService">
      <service :text="$t('service.content.1')" img="geologiche" />
      <service :text="$t('service.content.2')" img="idrogeologiche" />
      <service :text="$t('service.content.3')" img="sondaggi" />
      <service
        :text="$t('service.content.40')"
        :text1="$t('service.content.41')"
        :text2="$t('service.content.42')"
        img="medie"
        :txtXl="false"
      />
      <service :text="$t('service.content.5')" img="masw" :txtXl="false" />
      <service :text="$t('service.content.6')" img="ambiente" :txtXl="false" />

      <service :text="$t('service.content.7')" img="scavo" :txtXl="false" />
      <service :text="$t('service.content.8')" img="maps" />
      <service :text="$t('service.content.9')" img="pozzo" />
      <service :text="$t('service.content.10')" img="maps" />
    </div>
</div>



  </div>
</template>

<script>
import service from "@/components/service.vue";
export default {
  mounted(){
    this.$anime({
    targets: "#containerService .x",
    translateY: ["100px", "0px"],
    opacity: ["0", "1"],
      easing: "easeInOutCubic", //https://easings.net/it
      duration: 500,
      delay:250,
      autoplay: true,
      delay: this.$anime.stagger(200),
      complete: () => {},
    })
  },
  components: { service },
};
</script>

<style>
</style>