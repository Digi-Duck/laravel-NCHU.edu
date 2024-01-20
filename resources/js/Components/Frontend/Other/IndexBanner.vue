
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
        };
    },
};
</script>

<template >
    <div class="w-[1294px] m-auto mt-[25px]">
        <div class="font-title  row-one">創新教育</div>
        <div class="font-title ml-[291px] mt-[-67px] row-two">開啟無限可能</div>
        <div class="font-large ml-[429px] mt-[-25px] row-three">Innovative education, </div>
        <div class="font-large ml-[199px]  mt-[-30px] row-four">unlocking limitless</div>
        <div class="circle-p w-0 h-0"></div>
        <div class="right-p w-0 h-0"></div>
        <div class="font-large ml-[692px] mt-[-43px] row-five">possibilities.</div>
        <div class="flex ml-[295px] mb-[90px]">
            <img class="mr-[53px] w-[90px] h-[90px]" :src="images.blackRow" alt="">
            <img class="mr-[53px] w-[90px] h-[90px]" :src="images.blackRow" alt="">
            <img class="mr-[53px] w-[90px] h-[90px]" :src="images.blackRow" alt="">
        </div>
        <img class="w-[98%] m-auto" :src="images.indexP" alt="">
    </div>
</template>

<style scoped>
img{
    filter: grayscale(100%);
    transition: 0.3s;
}
img:hover{
    @apply filter-none;
}
.font-title {
    @apply text-[145px] text-[#0057ff] font-black;
    font-family: 'Noto Sans TC', sans-serif;
    z-index: 1;
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
    @apply absolute bottom-[20px] w-[115px] h-[110px] bg-no-repeat bg-right bg-[length:85px_85px] ;
    content: "";
    background-image: url('/images/banner/blue-row.png');
}

.row-two:after {
    @apply absolute bottom-[44px] w-[120px] h-[110px] bg-no-repeat bg-right bg-[length:85px_85px] rotate-90;
    content: "";
    background-image: url('/images/banner/blue-row.png');
}

.row-three:before {
    @apply absolute left-[-420px] bottom-[15px] h-[201px] w-[549px] bg-no-repeat bg-left;
    content: "";
    background-image: url('/images/banner/left-p.svg');
}

.row-five:before {
    @apply absolute left-[-120px] bottom-[-70px] h-[220px] w-[580px] bg-no-repeat bg-[length:580px_220px];
    content: "";
    background-image: url('/images/banner/draw_circle.gif');

}

.right-p:after {
    @apply absolute left-[1020px] top-[-58px] h-[216px] w-[251px] bg-no-repeat;
    content: "";
    background-image: url('/images/banner/right-p.svg');
}

.circle-p:after {
    @apply absolute left-[740px] bottom-[248px] h-[166px] w-[166px] bg-no-repeat;
    content: "";
    background-image: url('/images/banner/circle-p.svg');
}
</style>
