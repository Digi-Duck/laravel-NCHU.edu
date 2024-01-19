<!-- 前台首頁 -->

<script>
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import IndexBanner from '@/Components/Frontend/Other/IndexBanner.vue';
import IndexMain from '@/Components/Frontend/Other/IndexMain.vue';

import IndexCourse from '@/Components/Frontend/Other/IndexCourse.vue';

export default {
  components: {
    FrontendLayout,
    IndexBanner,
    IndexCourse,
    IndexMain,
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
        <IndexMain />
    </div>
    <div>
      <IndexCourse />
    </div>

    <!-- <div>
      <IndexMain />
    </div> -->
  </FrontendLayout>
</template>

<style scoped>

</style>
