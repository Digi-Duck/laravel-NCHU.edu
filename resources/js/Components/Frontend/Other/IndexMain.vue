<script>
import camp from '/images/main/camp.svg';
import certificate from '/images/main/certificate.svg';
import handmade from '/images/main/hand-made.svg';
import sport from '/images/main/sport.svg';
import training from '/images/main/training.svg';
import blueRow from '/images/banner/blue-row.png';
import vector from '/images/main/vector.svg';
import provide from '/images/main/provide.svg';

export default {
    data() {
        return {
            images: {
                camp, certificate, handmade, sport, training, blueRow, vector, provide,
            },
            pro: [{
                id: 1,
                name: '兒童營隊',
                content: '體驗平日上課較無機會接觸到的課程，讓小朋友有個難忘且充實的寒暑假。',
                img: camp,
            },
            {
                id: 2,
                name: '單元手作',
                content: '短時間的學習課程，適合生活忙碌的、想要體驗不同領域或是培養其他興趣的你。',
                img: handmade,
            },
            {
                id: 3,
                name: '運動課程',
                content: '為期2~3個月運動課程，適合想要運動、喜歡運動或是想挑戰不同以往運動的你。',
                img: sport,
            },
            {
                id: 4,
                name: '職業訓練',
                content: '適合有較充裕時間，想要了解、學習、體驗更完整不同領域知識的你。',
                img: training,
            },
            {
                id: 5,
                name: '專業證照',
                content: '適合想要考取證照的你，由課程專業講師帶領你了解各種專業知識，得到專業認證。',
                img: certificate,
            },],
        }
    },
}
</script>
<template>
    <div>
        <div class="main-top">
            <div class="big-title">
                <div class="w-[83%]">
                    <!-- <img class=" w-[100%]" :src="images.provide" alt=""> -->
                    <div class="w-[517px] mt-[-15px] ms-[50px]">我們<span class="tracking-[-3px]"> We</span></div>
                    <div class="w-[517px] mt-[-40px] flex gap-[15px] arrow"><span class="mt-[15px] tracking-[-3px]">provide
                        </span>提供
                    </div>
                </div>
                <!-- <div class="w-[18%] mt-auto"><img class="arrow" :src="images.blueRow" alt=""></div> -->
            </div>
            <ul class="w-[800px] flex items-center justify-center flex-wrap gap-[15px]">
                <li>
                    <Link href="">01兒童營隊</Link>
                </li>|
                <li>
                    <Link href="">02單元手作</Link>
                </li>|
                <li>
                    <Link href="">03運動課程</Link>
                </li>|
                <li>
                    <Link href="">04職業訓練</Link>
                </li>|
                <li>
                    <Link href="">05專業證照</Link>
                </li>
            </ul>
        </div>
        <div class="main-bottom">
            <div class="main w-[85%] mt-[-7%]" v-for="item in pro" :key="item.id">
                <div class="w-[100%] flex justify-evenly" data-aos="fade-down" data-aos-easing="linear"
                    data-aos-duration="1500">
                    <div class="main-card w-[30%] py-[10%]">
                        <div class="title ps-[3%]">0{{ item.id }}</div>
                        <div class="title float-right mt-[-6%]">{{ item.name }}</div>
                        <div class="content">{{ item.content }}</div>
                        <Link href="" class="more">了解更多&nbsp<i class="fa-solid fa-arrow-right"></i>
                        </Link>
                    </div>
                    <div class="w-[60%] flex "><img :src="item.img" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</template>
<style scoped>
.main-top {
    @apply flex justify-center pt-[63px] gap-[1.5%] mt-[-0.5%] mb-[5%];
}

.big-title {
    @apply w-[32%] h-[252px] text-[5vw] font-[700] flex;
}

.big-title span {
    @apply text-[3vw] font-[700];
}

.big-title .arrow {
    position: relative;
}

.big-title .arrow::after {
    content: "";
    @apply absolute top-[35%] left-[78%] w-[120px] h-[110px] bg-no-repeat bg-right bg-[length:85px_85px] rotate-90;
    background-image: url('/images/banner/blue-row.png');
}

ul {
    @apply text-[22px] font-[800];
}

ul li {
    @apply text-[22px] font-[800];
}

ul li:hover {
    @apply text-[#0057FF];
}

@media(max-width:768px) {
    .main-top {
        @apply flex-col;
    }

    .big-title {
        @apply w-[100%] h-[126px] justify-between;
        font-size: 60px;
    }

    .bid-title span {
        font-size: 45px;
    }

    .big-title img {
        @apply w-[45px] ml-auto;
    }

    ul {
        @apply w-[100%];
    }

    ul li {
        font-size: 16px;
    }
}

.title {
    @apply text-[4vw];
    font-weight: 900;
    color: #0057FF;
}

.content {
    @apply text-[18px] font-[900] ml-[25%] tracking-[1px];
}

.more {
    @apply text-[20px] font-[700] mt-[30px] float-right;
}

.more:hover {
    color: #0057FF;
}

img {
    filter: grayscale(100%);
}

img:hover {
    filter: none;
    transition: 0.3s;
}

.main-bottom {
    @apply flex items-center flex-col ml-[4%];
}

@media(max-width:768px) {
    .main {
        @apply w-[100%];
    }

    .main-card {
        @apply w-[40%];
    }

    .title {
        
        font-size: 24px;
        float: none;
        padding: 0;
    }

    .content {
        @apply ml-0;
        font-size: 12px;
    }

    .more {
        font-size: 10px;
        float: none;
    }
}
</style>
