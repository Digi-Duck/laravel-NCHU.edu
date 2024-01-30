<!-- 前台模板 -->

<script>
import FrontendHeader from '@/Components/Frontend/Template/FrontendHeader.vue';
import FrontendFooter from '@/Components/Frontend/Template/FrontendFooter.vue';

import frontendBackground from '/images/body/grid.svg';
import frontendBackgroundPad from '/images/body/smallGrid.svg';

export default {
    components: {
        FrontendHeader,
        FrontendFooter,
    },
    data() {
        return {
            images: {
                frontendBackground, frontendBackgroundPad,
            },
            screenWidth: false,
        };
    },
    mounted() {
        this.checkScreenWidth();
        window.addEventListener('resize', this.checkScreenWidth);
    },
    methods: {
        checkScreenWidth() {
            this.screenWidth = window.innerWidth <= 768;
        },
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
    <section id="frontend-layout" ref="frontendLayout" class="h-[100dvh] overflow-x-hidden"
        :style="{ backgroundImage: `url(${screenWidth ? images.frontendBackgroundPad : images.frontendBackground})` }">
        <div>
            <FrontendHeader />

            <main>
                <slot />
            </main>

            <FrontendFooter />
        </div>
    </section>
</template>
