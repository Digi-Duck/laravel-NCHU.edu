<script>
import camp from '/images/main/camp.svg';
import certificate from '/images/main/certificate.svg';
import handmade from '/images/main/hand-made.svg';
import sport from '/images/main/sport.svg';
import training from '/images/main/training.svg';
import blueRow from '/images/banner/blue-row.png';
import vector from '/images/main/vector.svg';
import provide from '/images/main/provide.png';

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
            show: false,
        }
    },
    mounted() {
        this.show = true;
    },
}
</script>
<template>
    <main class="w-[90%] md:w-[80%] m-auto">
        <div class="main">
            <div class="main-top">
                <Transition name="slide-fade-left">
                    <div v-if="show" class="big-title">
                        <img :src="images.provide" alt="">
                    </div>
                </Transition>
                <Transition name="slide-fade-right">
                    <ul v-if="show" class="list">
                        <li>
                            <Link href="">01兒童營隊</Link>
                        </li>|
                        <li>
                            <Link href="">02單元手作</Link>
                        </li>|
                        <li>
                            <Link href="">03運動課程</Link>
                        </li><span>|</span>
                        <li>
                            <Link href="">04職業訓練</Link>
                        </li>|
                        <li>
                            <Link href="">05專業證照</Link>
                        </li>
                    </ul>
                </Transition>

            </div>
            <div class="main-bottom">
                <div class="main-cards" v-for="item in pro" :key="item.id"
                    :class="{ 'card-border': item.id == pro.length }">
                    <Transition name="slide-fade-up">
                        <div v-if="show" class="card">
                            <div class="main-card">
                                <div class="title ml-[-10px]">0{{ item.id }}</div>
                                <div class="title-name">{{ item.name }}</div>
                                <div class="content">{{ item.content }}</div>
                                <Link href="" class="more">了解更多&nbsp<i class="fa-solid fa-arrow-right"></i>
                                </Link>
                            </div>
                            <div class="card-img"><img :src="item.img" alt=""></div>
                        </div>
                    </Transition>

                </div>
            </div>
        </div>
    </main>
</template>
<style scoped>
.main-top {
    @apply flex justify-center pt-[63px] gap-[1.5%] mt-[-0.5%] mb-[5%];
}

.big-title {
    @apply w-[32%] text-[5vw] font-[700];
}

.list {
    @apply text-[1.15vw] font-[800] flex items-center justify-center flex-wrap gap-[1vw];
}

.list li:hover {
    @apply text-[#0057FF];
}

@media(max-width:1400px) {}

.main-cards {
    @apply w-[85%] mt-[-7%];
}

.card {
    @apply w-[100%] flex justify-evenly;
}

.main-card {
    @apply w-[30%] py-[10%];
}

.title,
.title-name {
    @apply text-[4vw] text-[#0057ff] font-[900];
}

.title-name {
    @apply float-right mt-[-6%];
}

.content {
    @apply text-[1vw] font-[900] ml-[25%] tracking-[1px];
}

.more {
    @apply text-[1vw] font-[700] mt-[30px] float-right hover:text-[#0057ff];
}

.card-img {
    @apply w-[60%] flex;
    filter: grayscale(100%);
}

.card-img:hover {
    filter: none;
    transition: 0.3s;
}

.main-bottom {
    @apply flex items-center flex-col ml-[4%];
}

.slide-fade-left-enter-active {
    transition: all 1s ease-out;
}

.slide-fade-left-enter-from {
    transform: translate(-300px);
    opacity: 0;
}

.slide-fade-right-enter-active {
    transition: all 1s ease-out;
}

.slide-fade-right-enter-from {
    transform: translate(300px);
    opacity: 0;
}
.slide-fade-up-enter-active {
    transition: all 1s ease-out;
}

.slide-fade-up-enter-from {
    transform: translate(0px, 100px);
    opacity: 0;
}

@media(max-width:1400px) {
    .list {
        @apply text-[1.4vw];
    }

    .main-cards {
        @apply w-[95%];
    }

    .title,
    .title-name {
        @apply text-[4.3vw];
    }

    .content,
    .more {
        @apply text-[1.3vw];
    }
}

@media(max-width:768px) {
    .main-top {
        @apply flex-col pt-0;
    }

    .big-title {
        @apply w-[41%];
    }

    .list {
        @apply text-[2.3vw] mb-[30px];
    }

    .main-bottom {
        @apply gap-[40px];
    }

    .main-card {
        @apply w-[35%] py-[6%];
    }

    .card {
        @apply justify-between;
    }

    .title,
    .title-name {
        @apply text-[5.2vw] mb-[-10px];
    }

    .content {
        @apply text-[1.6vw] pt-[8px];
        clear: right;
    }

    .more {
        @apply text-[1.6vw] mt-[10px];
    }
}

@media(max-width:500px) {
    .main-top {
        @apply items-center mb-0;
    }

    .big-title {
        @apply w-[65%];
    }

    .list {
        @apply text-[3.8vw] gap-[2vw] mb-0;
    }

    .list span {
        @apply hidden;
    }

    .main-bottom {
        @apply gap-[20px];
    }

    .main-cards {
        @apply pt-[60px] border-b-[0.5vw] border-black;
    }

    .card {
        @apply flex flex-col;
    }

    .main-card {
        @apply w-[100%] order-2;
    }

    .title-name {
        @apply pr-[28vw];
    }

    .title,
    .title-name {
        @apply text-[9.6vw] m-0 inline-block text-left;
    }

    .card-img {
        @apply w-[100%];
    }

    .card-border {
        @apply border-0;
    }

    .content {
        @apply ml-0 text-[4.3vw];
    }

    .more {
        @apply text-[3.8vw];
    }

}
</style>
