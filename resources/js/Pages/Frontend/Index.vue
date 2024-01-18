<!-- 前台首頁 -->

<script>
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import FrontendBanner from '@/Components/Frontend/Template/FrontendBanner.vue';

export default {
  layout: FrontendLayout,
  components: {
    FrontendBanner,
  },
  data() {
    return {

    };
  },
  methods: {

  },
};
</script>

<template>
  <div>
    <FrontendBanner />
  </div>
</template>

<style scoped>

</style>
