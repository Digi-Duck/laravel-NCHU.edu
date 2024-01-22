<!-- 前台首頁 -->

<script>
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import IndexBanner from '@/Components/Frontend/Other/IndexBanner.vue';
import IndexMain from '@/Components/Frontend/Other/IndexMain.vue';

import IndexCourse from '@/Components/Frontend/Other/IndexCourse.vue';

import IndexContact from '@/Components/Frontend/Other/IndexContact.vue';

export default {
    components: {
        FrontendLayout,
        IndexBanner,
        IndexCourse,
        IndexMain,
        IndexContact,
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
    <div>
      <IndexContact />
    </div>
  </FrontendLayout>
</template>

<style scoped>

</style>
