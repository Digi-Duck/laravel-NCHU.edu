<!-- 前台首頁 -->

<script>
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import IndexBanner from '@/Components/Frontend/Other/IndexBanner.vue';

import IndexCourse from '@/Components/Frontend/Other/IndexCourse.vue';

export default {
  components: {
    FrontendLayout,
    IndexBanner,
    IndexCourse,
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
    <div>
      <IndexCourse />
    </div>
  </FrontendLayout>
</template>

<style scoped>

</style>
