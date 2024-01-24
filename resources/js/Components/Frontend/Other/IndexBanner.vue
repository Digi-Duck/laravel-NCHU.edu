
<script>
import blackRow from '/images/banner/black-row.png';
import indexP from '/images/banner/index-p.svg';

export default {
    data() {
        return {
            images: {
                blackRow,
                indexP,
            },
            show: false,
            stage: 1,
        };
    },
    mounted() {
        this.show = true;
    },
    methods: {
        showTwo() {
            this.stage = 2;
        },
        showThree() {
            this.stage = 3;
        }
    },
}
</script>

<template >
    <div class="w-[85%] h-[100vh] mb-[25vw] m-auto mt-[4.3vw] ">
        <transition name="left-in" @after-enter="showTwo">
            <div v-show="show" class=" font-title  row-one ">創新教育</div>
        </transition>
        <transition name="right-in" @after-enter="showThree">
            <div v-show="show" class=" font-title ml-[15.15vw] mt-[-3.4vw] row-two ">開啟無限可能</div>
        </transition>
        <transition name="right-in" @after-enter="showThree">
            <div v-show="show" class="font-large ml-[22.34vw] mt-[-1.3vw] row-three z-[1]">Innovative education, </div>
        </transition>
        <transition>
            <div v-show="stage >= 2" class="left-p w-0 h-0 z-[0]"></div>
        </transition>
        <transition name="left-in" @after-enter="showTwo">
            <div v-show="show" class="z-[2] font-large ml-[10.3vw]  mt-[-1.56vw] row-four">unlocking limitless</div>
        </transition>
        <transition>
            <div v-show="stage >= 2" class="circle-p w-0 h-0 z-[0]"></div>
        </transition>
        <transition>
            <div v-show="stage >= 2" class="right-p w-0 h-0"></div>
        </transition>
        <transition name="right-in" @after-enter="showThree">
            <div v-show="show" class="font-large ml-[36vw] mt-[-2.23vw] row-five">possibilities.</div>
        </transition>
        <transition name="left-in" @after-enter="showTwo">
            <div v-show="show" class=" flex ml-[15.36vw] mb-[4.68vw] ">
                <img class="z-[2] mr-[2.7vw] w-[4.68vw] h-[4.68vw]" :src="images.blackRow" alt="">
                <img class="z-[2] mr-[2.7vw] w-[4.68vw] h-[4.68vw]" :src="images.blackRow" alt="">
                <img class="z-[2] mr-[2.7vw] w-[4.68vw] h-[4.68vw]" :src="images.blackRow" alt="">
            </div>
        </transition>
        <transition>
            <img v-show="stage >= 2" class=" indexP w-[98%] m-auto" :src="images.indexP" alt="">
        </transition>
    </div>
</template>

<style scoped>
/* transition */
/* left-in*/
.left-in-enter-active {
    transition: all 0.8s ease-out;
}

.left-in-enter-from {
    transform: translateX(-8%);
    opacity: 0;
}

.left-in-leave-to {
    transform: translateX(0%);
    opacity: 0;
}

/* right-in*/
.right-in-enter-active {
    transition: all 0.8s ease-out;
}

.right-in-enter-from {
    transform: translateX(8%);
    opacity: 0;
}

.right-in-leave-to {
    transform: translateX(0%);
    opacity: 0;
}

/* animation */
@keyframes upAnimation {
    0% {
        transform: translateY(26vw);
    }

    100% {
        transform: translateY(0%);
    }
}

/* CSS */
img {
    filter: grayscale(100%);
    /* transition: 0.3s; */

}
.indexP{
    animation: upAnimation 1.3s ease;
}
img:hover {
    @apply filter-none;
}

.font-title {
    @apply text-[7.55vw] text-[#0057ff] font-black;
    font-family: 'Noto Sans TC', sans-serif;
    position: absolute;
    z-index: 2;
}

.font-large {
    @apply text-[3.33vw] text-[#000000] font-black tracking-[-3px] font-bold;
    font-family: 'Inter', sans-serif;
}

.row-one,
.row-two,
.row-three,
.row-four,
.circle-p,
.right-p,
.left-p,
.row-five {
    @apply relative;
}

.row-one:after {
    @apply absolute bottom-[1.04vw] w-[5.98vw] h-[5.72vw] bg-no-repeat bg-right bg-[length:4.42vw_4.42vw];
    content: "";
    background-image: url('/images/banner/blue-row.png');
}

.row-four:hover~.right-p:after,
.row-five:hover~.right-p:after,
.row-one:hover~.circle-p:after,
.row-two:hover~.circle-p:after {
    filter: none;
}

.row-two:after {
    @apply absolute bottom-[2.29vw] w-[6.25vw] h-[5.72vw] bg-no-repeat bg-right bg-[length:4.42vw_4.42vw] rotate-90;
    content: "";
    background-image: url('/images/banner/blue-row.png');
}

.left-p:before {
    @apply absolute left-[0.52vw] top-[-11.45vw] h-[10.46vw] w-[28.59vw] bg-no-repeat bg-left duration-300 hover:filter-none;
    content: "";
    background-image: url('/images/banner/left-p.svg');
    filter: grayscale(100%);
    animation: upAnimation 1.3s ease;
}

.row-five:before {
    @apply absolute left-[-6.25vw] bottom-[-3.64vw] h-[11.45vw] w-[30.20vw] bg-no-repeat bg-[length:30.2vw_11.45vw];
    content: "";
    background-image: url('/images/banner/draw_circle.gif');
}

.right-p:after {
    @apply absolute left-[53.12vw] top-[-3.02vw] h-[11.25vw] w-[13.07vw] bg-no-repeat duration-300 hover:filter-none;
    content: "";
    background-image: url('/images/banner/right-p.svg');
    filter: grayscale(100%);
    animation: upAnimation 1.3s ease;
}

.circle-p:after {
    @apply absolute left-[38.54vw] bottom-[12.9vw] h-[8.64vw] w-[8.64vw] bg-no-repeat duration-300;
    content: "";
    background-image: url('/images/banner/circle-p.svg');
    filter: grayscale(100%);
    animation: upAnimation 1.3s ease;
}
</style>
