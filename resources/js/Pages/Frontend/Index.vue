<!-- 前台首頁 -->

<script>
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import IndexBanner from '@/Components/Frontend/Other/IndexBanner.vue';

export default {
  layout: FrontendLayout,
  components: {
    IndexBanner,
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
    <IndexBanner />
  </div>
</template>

<style scoped>

</style>
