
<template>
    <div class="w-full mb-[81px]">
        <div class="flex">
            <div class="font-title ml-[120px] row-one ">創新教育</div>
        </div>
        <div class="font-title ml-[411px] mt-[-67px] row-two">開啟無限可能</div>
        <div class="font-large ml-[549px] mt-[-25px] row-three">Innovative education, </div>
        <div class="font-large ml-[319px]  mt-[-30px] row-four">unlocking limitless</div>
        <div class="circle-p w-0 h-0"></div>
        <div class="right-p w-0 h-0"></div>
        <div class="font-large ml-[812px] mt-[-45px] row-five">possibilities.</div>
        <div class="flex ml-[415px] ">
            <img class="mr-[53px] w-[90px] h-[90px]" src="/public/images/banner/black-row.png" alt="">
            <img class="mr-[53px] w-[90px] h-[90px]" src="/public/images/banner/black-row.png" alt="">
            <img class="mr-[53px] w-[90px] h-[90px]" src="/public/images/banner/black-row.png" alt="">
        </div>
    </div>
    <div class="w-full">
        <img class="w-full" src="/public/images/banner/Rectangle 64.png" alt="">
    </div>
</template>
<style scoped>
.font-title {
    @apply text-[145px] text-[#0057ff];
    font-family: 'Noto Sans TC', sans-serif;
    font-weight: 900;
}

.font-large {
    @apply text-[64px] text-[#000000] font-black tracking-[-2.5px];
    font-family: 'Inter', sans-serif;
    font-weight: 700;
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
    background-image: url('images/banner/blue-row.png');
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
    background-image: url('images/banner/blue-row.png');
    background-repeat: no-repeat;
    background-position-x: right;
    background-size: 85px 85px;
    rotate: 90deg;
}

.row-three:before {
    content: "";
    position: absolute;
    left: -429px;
    bottom: 23px;
    height: 201px;
    width: 549px;
    background-image: url('images/banner/left-p.png');
    background-repeat: no-repeat;
    background-position-x: left;
    z-index: -1;
}

.row-five:before {
    content: "";
    position: absolute;
    left: -35px;
    bottom: -28px;
    height: 115px;
    width: 409px;
    background-image: url('images/banner/draw_circle.png');
    background-repeat: no-repeat;
}

.right-p:after {
    content: "";
    position: absolute;
    left: 1151px;
    top: -53px;
    height: 216px;
    width: 251px;
    background-image: url('images/banner/right-p.png');
    background-repeat: no-repeat;
    z-index: -1;
}

.circle-p:after {
    content: "";
    position: absolute;
    left: 858px;
    bottom: 248px;
    width: 166px;
    height: 166px;
    z-index: -1;
    background-image: url('images/banner/circle-p.png');
    background-repeat: no-repeat;

}
</style>
