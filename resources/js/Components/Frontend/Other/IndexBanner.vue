
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
            showLeft: false,
            stage: 1,
        };
    },
    mounted() {
        this.showLeft = true;
    },
    methods: {
        showRight() {
            this.stage = 2;
        },
        showImg() {
            this.stage = 3;
        }
    },
}
</script>

<template >
    <div class="w-[1294px] h-[100vh] mb-[30%] m-auto mt-[25px] ">
        <transition name="left-in" @after-enter="showRight">
            <div v-show="showLeft" class=" font-title  row-one ">創新教育</div>
        </transition>
        <transition name="right-in" @after-enter="showImg">
            <div v-show="stage >= 2" class=" font-title ml-[291px] mt-[-67px] row-two ">開啟無限可能</div>
        </transition>
        <transition name="right-in" @after-enter="showImg">
            <div v-show="stage >= 2" class="font-large ml-[429px] mt-[-25px] row-three z-[1]">Innovative education, </div>
        </transition>
        <transition name="left-in" @after-enter="showRight">
            <div v-show="showLeft" class="z-[2] font-large ml-[199px]  mt-[-30px] row-four">unlocking limitless</div>
        </transition>
        <transition>
            <div v-show="stage >= 2" class="circle-p w-0 h-0 z-[0]"></div>
        </transition>
        <transition>
            <div v-show="stage >= 2" class="right-p w-0 h-0"></div>
        </transition>
        <transition name="right-in" @after-enter="showImg">
            <div v-show="stage >= 2" class="font-large ml-[692px] mt-[-43px] row-five">possibilities.</div>
        </transition>
        <transition name="left-in" @after-enter="showRight">
            <div v-show="showLeft" class=" flex ml-[295px] mb-[90px] ">
                <img class="z-[2] mr-[53px] w-[90px] h-[90px]" :src="images.blackRow" alt="">
                <img class="z-[2] mr-[53px] w-[90px] h-[90px]" :src="images.blackRow" alt="">
                <img class="z-[2] mr-[53px] w-[90px] h-[90px]" :src="images.blackRow" alt="">
            </div>
        </transition>
        <transition>
            <img v-show="stage >= 3" class=" indexP w-[98%] m-auto" :src="images.indexP" alt="">
        </transition>
    </div>
</template>

<style scoped>
/* transition */
/* left-in*/
.left-in-enter-active {
    transition: all 1.3s ease-out;
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
    transition: all 1.3s ease-out;
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
        transform: translateY(500px);
    }

    100% {
        transform: translateY(0%);
    }
}

/* CSS */
img {
    filter: grayscale(100%);
    transition: 0.3s;

}
.indexP{
    animation: upAnimation 3s ease;
}
img:hover {
    @apply filter-none;
}

.font-title {
    @apply text-[145px] text-[#0057ff] font-black;
    font-family: 'Noto Sans TC', sans-serif;
    position: absolute;
    z-index: 2;
}

.font-large {
    @apply text-[64px] text-[#000000] font-black tracking-[-3px] font-bold;
    font-family: 'Inter', sans-serif;
}

.row-one,
.row-two,
.row-three,
.row-four,
.circle-p,
.right-p,
.row-five {
    @apply relative;
}

.row-one:after {
    @apply absolute bottom-[20px] w-[115px] h-[110px] bg-no-repeat bg-right bg-[length:85px_85px];
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
    @apply absolute bottom-[44px] w-[120px] h-[110px] bg-no-repeat bg-right bg-[length:85px_85px] rotate-90;
    content: "";
    background-image: url('/images/banner/blue-row.png');
}

.row-three:before {
    @apply absolute left-[-420px] bottom-[15px] h-[201px] w-[549px] bg-no-repeat bg-left duration-300 hover:filter-none;
    content: "";
    background-image: url('/images/banner/left-p.svg');
    filter: grayscale(100%);
    animation: upAnimation 3s ease;
}

.row-five:before {
    @apply absolute left-[-120px] bottom-[-70px] h-[220px] w-[580px] bg-no-repeat bg-[length:580px_220px];
    content: "";
    background-image: url('/images/banner/draw_circle.gif');
}

.right-p:after {
    @apply absolute left-[1020px] top-[-58px] h-[216px] w-[251px] bg-no-repeat duration-300 hover:filter-none;
    content: "";
    background-image: url('/images/banner/right-p.svg');
    filter: grayscale(100%);
    animation: upAnimation 3s ease;
}

.circle-p:after {
    @apply absolute left-[740px] bottom-[248px] h-[166px] w-[166px] bg-no-repeat duration-300;
    content: "";
    background-image: url('/images/banner/circle-p.svg');
    filter: grayscale(100%);
    animation: upAnimation 3s ease;
}
</style>
