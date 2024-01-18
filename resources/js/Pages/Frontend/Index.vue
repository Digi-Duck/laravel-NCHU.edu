<!-- 前台首頁 -->

<script>
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import IndexBanner from '@/Components/Frontend/Other/IndexBanner.vue';

export default {
  components: {
    FrontendLayout,
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
  <FrontendLayout>
    <div>
      <IndexBanner />
    </div>
  </FrontendLayout>
</template>

<style scoped>

</style>
