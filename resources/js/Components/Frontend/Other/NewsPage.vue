<script>
import news from '/images/News/news.png';
import newsPhone from '/images/News/news-phone.png';
import wallpaper from '/images/News/wallpaper.svg';

export default {
    data() {
        return {
            images: {
                news, wallpaper, newsPhone,
            },
            Num: 1,
            ClickNum: 1,
            detail: false,
            screenWidth: false,
        }
    },
    mounted() {
        this.checkScreenWidth();
        window.addEventListener('resize', this.checkScreenWidth);
    },
    methods: {
        toggle() {
            if (this.ClickNum == 1) {
                return this.ClickNum = 2;
            } else {
                return this.ClickNum = 1;
            }
        },
        checkScreenWidth() {
            this.screenWidth = window.innerWidth >= 500;
        },
    }
}
</script>

<template>
    <div class="w-[100%] flex justify-center">
        <div class="main w-[100%] 2sm:w-[67%] mb-[70px]">
            <div class="title order-1"><img :src="screenWidth ? images.news : images.newsPhone" alt="" class="m-auto 2md:m-0"></div>
            <input type="date" class="w-[177px] h-[30px] text-[12px] md:text-[16px] m-auto mt-[10px] xl:w-[244px] xl:h-[41px] xl:mb-[40px] order-3">
            <div :class="ClickNum == 1 ? 'all-2' : 'all'" class="order-2">
                <button @click="toggle()" class="OptionClick" type="button" v-if="Num == 1">所有消息 V</button>
                <button @click="toggle()" class="OptionClick" type="button" v-if="Num == 2">本週消息 V</button>
                <button @click="toggle()" class="OptionClick" type="button" v-if="Num == 3">本月消息 V</button>
                <button @click="toggle()" class="OptionClick" type="button" v-if="Num == 4">半年內消息 V</button>
                <div :class="ClickNum == 2 ? 'SelectionOptionClick' : 'SelectionOption'">
                    <button @click="Num = 1, ClickNum = 1" class="OptionBtn" type="button">所有消息</button>
                    <button @click="Num = 2, ClickNum = 1" class="OptionBtn" type="button">本週消息</button>
                    <button @click="Num = 3, ClickNum = 1" class="OptionBtn" type="button">本月消息</button>
                    <button @click="Num = 4, ClickNum = 1" class="OptionBtn" type="button">半年內消息</button>
                </div>
            </div>
            <div class="SelectionBar w-[100%]">
                <button @click="Num = 1" :class="Num == 1 ? 'ClickColor' : 'SelectionBtn'" type="button">所有消息</button>
                <button @click="Num = 2" :class="Num == 2 ? 'ClickColor' : 'SelectionBtn'" type="button">本週消息</button>
                <button @click="Num = 3" :class="Num == 3 ? 'ClickColor' : 'SelectionBtn'" type="button">本月消息</button>
                <button @click="Num = 4" :class="Num == 4 ? 'ClickColor' : 'SelectionBtn'" type="button">半年內消息</button>
            </div>
            <div v-if="Num == 1" class="w-[100%] order-4">
                <div class="all-news">
                    <button type="button" class="news" href="" @click="detail = true">
                        <div>2024.01.01</div>
                        <div>【探索系列】2024鑑識推理偵查營 （1/29-1/31）</div>
                        <div><i class="fa-solid fa-arrow-right"></i></div>
                    </button>
                    <button class="news" href="">
                    <div>2024.01.01</div>
                    <div>【探索系列】2024鑑識推理偵查營 （1/29-1/31）</div>
                    <div><i class="fa-solid fa-arrow-right"></i></div>
                    </button>
                    <button type="button" class="news" href="">
                    <div>2024.01.01</div>
                    <div>【探索系列】2024鑑識推理偵查營 （1/29-1/31）</div>
                    <div><i class="fa-solid fa-arrow-right"></i></div>
                    </button>
                    <button type="button" class="news" href="">
                    <div>2024.01.01</div>
                    <div>【探索系列】2024鑑識推理偵查營 （1/29-1/31）</div>
                    <div><i class="fa-solid fa-arrow-right"></i></div>
                    </button>
                    <button type="button" class="news" href="">
                    <div>2024.01.01</div>
                    <div>【探索系列】2024鑑識推理偵查營 （1/29-1/31）</div>
                    <div><i class="fa-solid fa-arrow-right"></i></div>
                    </button>
                    <button type="button" class="news" href="">
                    <div>2024.01.01</div>
                    <div>【探索系列】2024鑑識推理偵查營 （1/29-1/31）</div>
                    <div><i class="fa-solid fa-arrow-right"></i></div>
                    </button>
                    <button type="button" class="news" href="">
                    <div>2024.01.01</div>
                    <div>【探索系列】2024鑑識推理偵查營 （1/29-1/31）</div>
                    <div><i class="fa-solid fa-arrow-right"></i></div>
                    </button>
                    <button type="button" class="news" href="">
                    <div>2024.01.01</div>
                    <div>【探索系列】2024鑑識推理偵查營 （1/29-1/31）</div>
                    <div><i class="fa-solid fa-arrow-right"></i></div>
                    </button>
                    <button type="button" class="news" href="">
                    <div>2024.01.01</div>
                    <div>【探索系列】2024鑑識推理偵查營 （1/29-1/31）</div>
                    <div><i class="fa-solid fa-arrow-right"></i></div>
                    </button>
                    <button type="button" class="news" href="">
                    <div>2024.01.01</div>
                    <div>【探索系列】2024鑑識推理偵查營 （1/29-1/31）</div>
                    <div><i class="fa-solid fa-arrow-right"></i></div>
                    </button>
                </div>
            </div>
            <div v-if="Num == 2" class="w-[100%] order-4">
                <Link class="news" href="">
                <div>2024.01.29</div>
                <div>【探索系列】2024鑑識推理偵查營 （1/29-1/31）</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </Link>
                <Link class="news" href="">
                <div>2024.01.29</div>
                <div>【探索系列】2024鑑識推理偵查營 （1/29-1/31）</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </Link>
                <Link class="news" href="">
                <div>2024.01.29</div>
                <div>【探索系列】2024鑑識推理偵查營 （1/29-1/31）</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </Link>
                <Link class="news" href="">
                <div>2024.01.29</div>
                <div>【探索系列】2024鑑識推理偵查營 （1/29-1/31）</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </Link>
                <Link class="news" href="">
                <div>2024.01.29</div>
                <div>【探索系列】2024鑑識推理偵查營 （1/29-1/31）</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </Link>
            </div>
            <div v-if="Num == 3" class="w-[100%] order-4">
                <Link class="news" href="">
                <div>2024.01.29</div>
                <div>【探索系列】2024鑑識推理偵查營 （1/29-1/31）</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </Link>
                <Link class="news" href="">
                <div>2024.01.29</div>
                <div>【探索系列】2024鑑識推理偵查營 （1/29-1/31）</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </Link>
                <Link class="news" href="">
                <div>2024.01.29</div>
                <div>【探索系列】2024鑑識推理偵查營 （1/29-1/31）</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </Link>
                <Link class="news" href="">
                <div>2024.01.29</div>
                <div>【探索系列】2024鑑識推理偵查營 （1/29-1/31）</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </Link>
                <Link class="news" href="">
                <div>2024.01.29</div>
                <div>【探索系列】2024鑑識推理偵查營 （1/29-1/31）</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </Link>
                <Link class="news" href="">
                <div>2024.01.01</div>
                <div>【探索系列】2024鑑識推理偵查營 （1/29-1/31）</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </Link>
                <Link class="news" href="">
                <div>2024.01.01</div>
                <div>【探索系列】2024鑑識推理偵查營 （1/29-1/31）</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </Link>
                <Link class="news" href="">
                <div>2024.01.01</div>
                <div>【探索系列】2024鑑識推理偵查營 （1/29-1/31）</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </Link>
                <Link class="news" href="">
                <div>2024.01.01</div>
                <div>【探索系列】2024鑑識推理偵查營 （1/29-1/31）</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </Link>
                <Link class="news" href="">
                <div>2024.01.01</div>
                <div>【探索系列】2024鑑識推理偵查營 （1/29-1/31）</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </Link>
            </div>
            <div v-if="Num == 4" class="w-[100%] order-4">
                <Link class="news" href="">
                <div>2024.01.29</div>
                <div>【探索系列】2024鑑識推理偵查營 （1/29-1/31）</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </Link>
                <Link class="news" href="">
                <div>2024.01.29</div>
                <div>【探索系列】2024鑑識推理偵查營 （1/29-1/31）</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </Link>
                <Link class="news" href="">
                <div>2024.01.29</div>
                <div>【探索系列】2024鑑識推理偵查營 （1/29-1/31）</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </Link>
                <Link class="news" href="">
                <div>2024.01.29</div>
                <div>【探索系列】2024鑑識推理偵查營 （1/29-1/31）</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </Link>
                <Link class="news" href="">
                <div>2024.01.29</div>
                <div>【探索系列】2024鑑識推理偵查營 （1/29-1/31）</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </Link>
                <Link class="news" href="">
                <div>2024.01.01</div>
                <div>【探索系列】2024鑑識推理偵查營 （1/29-1/31）</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </Link>
                <Link class="news" href="">
                <div>2024.01.01</div>
                <div>【探索系列】2024鑑識推理偵查營 （1/29-1/31）</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </Link>
                <Link class="news" href="">
                <div>2024.01.01</div>
                <div>【探索系列】2024鑑識推理偵查營 （1/29-1/31）</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </Link>
                <Link class="news" href="">
                <div>2024.01.01</div>
                <div>【探索系列】2024鑑識推理偵查營 （1/29-1/31）</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </Link>
                <Link class="news" href="">
                <div>2024.01.01</div>
                <div>【探索系列】2024鑑識推理偵查營 （1/29-1/31）</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
                </Link>
            </div>
        </div>
        <div v-if="detail" class="w-[100%] h-[100%] absolute top-0">
            <div class="mask w-full h-full fixed z-[5] top-0 left-0 bg-black/50">
                <div class="modal absolute z-[6] top-[5%] left-[16%] w-[68%] h-[90%] px-[3%] bg-white overflow-y-scroll">
                    <div class="my-[20px] text-center relative">
                        <Link href="" class="text-[14px] 2sm:text-[24px] md:text-[26px] font-[600] text-[#0057ff]">點我報名</Link>
                        <button type="button" @click="detail = false"><i
                                class="fa-solid fa-xmark text-[21px] absolute top-[25%] right-0"></i></button>
                    </div>
                    <div class="flex flex-col text-[12px] 2sm:text-[20px] md:text-[22px] font-[500] text-center">
                        <div class="mb-[20px]">
                            人體農場真實存在嗎??犯罪者用件件謎團，嘲諷社會無能。<br>
                            鑑識專家利用家譜遺傳學分析，協助科學辦案，翻轉無數懸案。完美犯罪真的存在嗎??
                        </div>
                        <div class="mb-[20px]">
                            想成為CSI的你 ~~與其沉迷在場景中鬥智，不如親自搞清楚，探索犯案現場的真相。 <br>
                            加入興大舉辦【鑑識推理偵查營】。
                        </div>
                        <div class="mb-[20px]">
                            由國內外知名的鑑識專家李承龍博士親自授課，一起微物跡證，扭轉受害者命運。
                        </div>
                    </div>
                    <img :src="images.wallpaper" alt="" class="m-auto mb-[30px] h-[300px] 2sm:h-[504px] md:h-[632px]">
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.all {
    max-height: 12.4vh;
    overflow: hidden;
    animation-name: up;
    animation-duration: 0.5s;
    animation-timing-function: linear;
    animation-fill-mode: forwards;
}

.all-2 {
    max-height: 12.4vh;
    overflow: hidden;
}

@keyframes up {
    from {
        max-height: 12.4vh;
    }

    to {
        max-height: 30vh;
    }
}


.title {
    @apply mt-[20px] md:mt-[60px] md:mb-[20px] 2md:w-[185px] md:w-[315px];
}

.SelectionBar {
    border-bottom: 2px solid black;
}

.SelectionBtn {
    padding: 0.48vw 1.46vw;
    border-radius: 1.04vw 1.04vw 0px 0px;
    font-size: 1.04vw;
    font-family: inter;
    background-color: transparent;
    margin-right: 1vw;
}

.ClickColor {
    padding: 0.48vw 1.46vw;
    border-radius: 20px 20px 0px 0px;
    font-size: 1.04vw;
    font-family: inter;
    color: white;
    background-color: rgb(0, 87, 255);
    margin-right: 1vw;
}

.SelectionBtn:hover {
    background-color: rgb(210, 210, 210);
}


.OptionBtn {
    text-align: center;
    background-color: rgb(0, 87, 255);
    color: white;
    padding: 1.5vw 0px;
    border-bottom: 0.2vw solid rgba(255, 255, 255, 0.35);
    font-size: 2.8vw;
}

.OptionClick {
    width: 100%;
    text-align: center;
    border-bottom: 1px black solid;
    display: none;
}

.SelectionOptionClick {
    display: flex;
    flex-direction: column;
    font-size: 2.8vw;
}

.SelectionOption {
    display: none;
}

/* .all-news {
    @apply w-[100%] flex flex-col justify-center;
} */

.news {
    @apply w-[100%] py-[10px] md:py-[20px] text-[3vw] 2sm:text-[1.8vw] md:text-[2vw] xl:text-[1.4vw] font-[500] border-b-[1px] border-black flex justify-between md:gap-[4vw] xl:gap-[5vw];
}

.news:hover {
    @apply text-[#0057ff] duration-500;
}

@media (max-width:500px) {
    .main {
        @apply flex flex-col;
    }

    .SelectionBar {
        display: none;
    }

    .OptionClick {
        display: block;
    }
}
</style>
