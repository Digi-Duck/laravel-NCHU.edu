<script>
import camp from '/images/main/camp.svg';
import certificate from '/images/main/certificate.svg';
import handmade from '/images/main/hand-made.svg';
import sport from '/images/main/sport.svg';
import training from '/images/main/training.svg';

export default {
    data() {
        return {
            images: {
                camp, certificate, handmade, sport, training,
            },
            pro: [{
                id: 1,
                name: '兒童營隊',
                content: '體驗平日上課較無機會接觸到的課<br>程，讓小朋友有個難忘且充實的寒<br>暑假。',
                img: camp,
            },],
        }
    }
}
</script>
<template>
    <div>
        <div class="flex justify-center items-center pt-[63px]">
            <div class="provide w-[503px] h-[252px]">
                <div class="w-[100%] mt-[-15px] ms-[50px] arrow">我們<span> We</span></div>
                <div class="w-[100%] mt-[-40px] flex gap-[15px]"><span class="mt-[15px]">provide </span>提供</div>
            </div>
            <ul class="w-[748px] flex items-center justify-between">
                <li><a href="">01兒童營隊</a></li>|
                <li><a href="">02單元手作</a></li>|
                <li><a href="">03運動課程</a></li>|
                <li><a href="">04職業訓練</a></li>|
                <li><a href="">05專業證照</a></li>
            </ul>
        </div>
        <div class="flex items-center flex-col">
            <div class="w-[85%]">
                <div class="w-[100%] flex justify-evenly">
                    <div class="w-[30%] py-[10%]">
                        <div class="title ps-[3%]">01</div>
                        <div class="title text-right mt-[-6%]">兒童營隊</div>
                        <div class="content ms-[25%]">體驗平日上課較無機會接觸到的課<br>程，讓小朋友有個難忘且充實的寒<br>暑假。</div>
                        <div class="more text-right">了解更多</div>
                    </div>
                    <div class="w-[60%] flex "><img :src="pro[0].img" alt=""></div>
                </div>
            </div>
            <div class="w-[85%]">
                <div class="w-[100%] flex justify-evenly">
                    <div class="w-[30%] py-[10%]">
                        <div class="title ps-[3%]">01</div>
                        <div class="title text-right mt-[-6%]">兒童營隊</div>
                        <div class="text-right">體驗平日上課較無機會接觸到的課<br>程，讓小朋友有個難忘且充實的寒<br>暑假。</div>
                        <div class="more text-right">了解更多</div>
                    </div>
                    <div class="w-[60%] flex "><img :src="pro[0].img" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</template>
<style scoped>
.provide {
    font-family: 'Noto Sans TC', sans-serif;
    font-weight: 700;
    font-size: 95px;
}

.provide span {
    font-family: 'Inter', sans-serif;
    font-weight: 700;
    font-size: 50px;
}

main ul {
    font-family: 'Inter', sans-serif;
    font-size: 22px;
}

main ul li {
    font-family: 'Inter', sans-serif;
    font-weight: 800;
    font-size: 22px;
}

main ul li:hover {
    color: #0057FF;
}

.arrow {
    position: relative;
}

.arrow::after {
    content: '';
    position: absolute;
    width: 88px;
    height: 88px;
    background-image: url('/images/banner/blue-row.png');
    background-size: contain;
    transform: rotate(90deg);
    bottom: -124px;
    right: 50px;
}

.title {
    font-family: 'Noto Sans TC', sans-serif;
    font-size: 75px;
    font-weight: 800;
    color: #0057FF;
}
.content{
    font-family: 'Noto Sans TC', sans-serif;
    font-size: 18px;
    font-weight: 800;
}
.more{
    font-family: 'Inter', sans-serif;
    font-size: 20px;
    font-weight: 900;
}
img{
    filter: grayscale(100%);
}
img:hover{
    filter: none;
    transition: 0.3s;
}
</style>
