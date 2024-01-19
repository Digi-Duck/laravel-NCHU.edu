
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
    <div class="w-[85%] m-auto mt-[25px]">
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
        <img class="w-[100%] m-auto" :src="images.indexP" alt="">
    </div>
</template>

<style scoped>
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
    position: relative;
}

.row-one:after {
    content: "";
    position: absolute;
    bottom: 20px;
    width: 115px;
    height: 110px;
    background-image: url('/images/banner/blue-row.png');
    background-repeat: no-repeat;
    background-position-x: right;
    background-size: 85px 85px;
}

.row-two:after {
    content: "";
    position: absolute;
    bottom: 44px;
    width: 120px;
    height: 110px;
    background-image: url('/images/banner/blue-row.png');
    background-repeat: no-repeat;
    background-position-x: right;
    background-size: 85px 85px;
    rotate: 90deg;
}

.row-three:before {
    content: "";
    position: absolute;
    left: -420px;
    bottom: 15px;
    height: 201px;
    width: 549px;
    background-image: url('/images/banner/left-p.svg');
    background-repeat: no-repeat;
    background-position-x: left;
}

.row-five:before {
    content: "";
    position: absolute;
    left: -120px;
    bottom: -70px;
    height: 220px;
    width: 580px;
    background-image: url('/images/banner/draw_circle.gif');
    background-repeat: no-repeat;
    background-size: 580px 220px;
}

.right-p:after {
    content: "";
    position: absolute;
    left: 1020px;
    top: -58px;
    height: 216px;
    width: 251px;
    background-image: url('/images/banner/right-p.svg');
    background-repeat: no-repeat;
}

.circle-p:after {
    content: "";
    position: absolute;
    left: 740px;
    bottom: 248px;
    width: 166px;
    height: 166px;
    background-image: url('/images/banner/circle-p.svg');
    background-repeat: no-repeat;
}
</style>
