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
        console.log(this.$refs.frontendLayout);
    },
    methods: {
        checkScreenWidth() {
            this.screenWidth = window.innerWidth <= 768;
        },
        totop() {
            this.$refs.frontendLayout.scrollTo({ top: 0, behavior: 'smooth' });
        }
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
    <div>
        <section></section>
        <section id="frontend-layout" ref="frontendLayout" class="h-[100dvh] overflow-x-hidden"
            :style="{ backgroundImage: `url(${screenWidth ? images.frontendBackgroundPad : images.frontendBackground})` }">
            <div>
                <FrontendHeader />

                <main>
                    <slot />
                </main>
                <button class="absolute right-0 bottom-0" type="button" @click="totop">test</button>
                <FrontendFooter />
            </div>
        </section>
    </div>
</template>
