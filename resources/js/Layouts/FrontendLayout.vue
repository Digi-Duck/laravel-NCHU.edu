<!-- 前台模板 -->

<script>
import FrontendHeader from '@/Components/Frontend/Template/FrontendHeader.vue';
import FrontendFooter from '@/Components/Frontend/Template/FrontendFooter.vue';
import frontendBackground from '/images/body/grid.svg';

export default {
  components: {
    FrontendHeader,
    FrontendFooter,
  },
  data() {
    return {
      images: {
        frontendBackground,
      },
    };
  },
  methods: {

  },
  watch: {
    // 監聽路由變化，回到頁面頂端
    '$page': {
      handler() {
        if (this.$refs.frontendLayout) {
          this.$refs.frontendLayout.scrollTop = 0;
        }
      },
      deep: true,
    },
  },
};
</script>

<template>
  <section
    id="frontend-layout"
    ref="frontendLayout"
    class="h-[100dvh] overflow-x-hidden"
    :style="{ backgroundImage: `url(${images.frontendBackground})` }"
  >
    <div>
      <FrontendHeader />

      <main class="w-[80%] m-auto">
        <slot />
      </main>

      <FrontendFooter />
    </div>
  </section>
</template>
