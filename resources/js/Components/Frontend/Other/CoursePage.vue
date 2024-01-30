<script>
import coursePC from '/images/coursePage/coursePC.png';
import coursePhone from '/images/coursePage/coursePhone.png';
export default {
    props: {
        resCourse: Array,
    },
    data() {
        return {
            courses: this.resCourse ?? [],
            Num: 1,
            ClickNum: 1,
            detail: false,
            screenWidth: false,
            images: {
                coursePC, coursePhone,
            }
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
    },
}
</script>
<template>
    <div class="w-[85%]  m-auto flex  flex-col">
        <div class="title"><img :src="screenWidth ? images.coursePC : images.coursePhone" alt="" class="m-auto 2md:m-0">
        </div>
        <div class="w-[90%] md:w-[80%] m-auto">
            <div :class="ClickNum == 1 ? 'all-2' : 'all'">
                <button class="OptionClick" type="button">全部課程 <i class="fa-solid fa-chevron-down"></i></button>
                <button class="OptionClick" type="button">最新課程 <i class="fa-solid fa-chevron-down"></i></button>
                <button class="OptionClick" type="button">兒童營隊 <i class="fa-solid fa-chevron-down"></i></button>
                <button class="OptionClick" type="button">單元手作 <i class="fa-solid fa-chevron-down"></i></button>
                <button class="OptionClick" type="button">運動課程 <i class="fa-solid fa-chevron-down"></i></button>
                <button class="OptionClick" type="button">職業訓練 <i class="fa-solid fa-chevron-down"></i></button>
                <button class="OptionClick" type="button">專業證照 <i class="fa-solid fa-chevron-down"></i></button>
                <div :class="ClickNum == 2 ? 'SelectionOptionClick' : 'SelectionOption'">
                    <button class="OptionBtn" type="button">全部課程</button>
                    <button class="OptionBtn" type="button">最新課程</button>
                    <button class="OptionBtn" type="button">兒童營隊</button>
                    <button class="OptionBtn" type="button">單元手作</button>
                    <button class="OptionBtn" type="button">運動課程</button>
                    <button class="OptionBtn" type="button">職業訓練</button>
                    <button class="OptionBtn" type="button">專業證照</button>
                </div>
            </div>
            <div class="SelectionBar w-[100%]">
                <button @click="Num = 1" :class="Num == 1 ? 'ClickColor' : 'SelectionBtn'" type="button">全部課程</button>
                <button @click="Num = 2" :class="Num == 2 ? 'ClickColor' : 'SelectionBtn'" type="button">最新課程</button>
                <button @click="Num = 3" :class="Num == 3 ? 'ClickColor' : 'SelectionBtn'" type="button">兒童營隊</button>
                <button @click="Num = 4" :class="Num == 4 ? 'ClickColor' : 'SelectionBtn'" type="button">單元手作</button>
                <button @click="Num = 5" :class="Num == 5 ? 'ClickColor' : 'SelectionBtn'" type="button">運動課程</button>
                <button @click="Num = 6" :class="Num == 6 ? 'ClickColor' : 'SelectionBtn'" type="button">職業訓練</button>
                <button @click="Num = 7" :class="Num == 7 ? 'ClickColor' : 'SelectionBtn'" type="button">專業證照</button>
            </div>
        </div>
        <div
            class="w-[90%]  ml-[13.8vw] 2sm:ml-[7.2vw] md:ml-[10.5vw] md:w-[80%]  py-[1%]  flex gap-[3%] flex-wrap justify-start">
            <div v-for="course in courses.rt_data" :key="course.id" class="flex 2sm:flex-col bg-[#ffffff] w-[55vw] mb-[2.5vw] 2sm:w-[22vw] 2sm:h-[29.72vw] 2sm:mb-[2.5vw]
            md:mb-[1.5vw] md:w-[14.32vw] md:h-[19.06vw]">
                <div class=" w-[22vw] h-[19.34vw 2sm:w-[22vw] 2sm:h-[28.34vw]  md:w-[14.32vw] md:h-[18.37vw] flex "
                    :style="{ backgroundImage: 'url(' + course.img_path + ')', backgroundSize: 'cover', backgroundPosition: 'center' }">
                </div>
                <div
                    class="flex flex-col justify-start items-start h-[100%] w-[33vw] 2sm:w-[22vw] md:w-[14.32vw] px-[1.6vw]  pt-[1.3vw] md:px-[0.78vw] md:pt-[0.52vw]">
                    <h1 class="card-name ">{{ course.name }}</h1>
                    <ul>
                        <li class="card-text ">課程日期 | {{ course.start_time.slice(0, 10) }} </li>
                        <li class="card-text ">課程價格 | {{ course.price === 0 ? 'Free' : '$' + course.price }}</li>
                    </ul>
                    <div class="flex  ml-auto mt-auto mb-[1.04vw] px-[0.78vw] card-more"><a :href="course.link"
                            class=" border-b-[2px] border-[#ffffff]  hover:border-b-[2px] hover:border-[#0057ff] ">了解更多 <i
                                class="fa-solid fa-arrow-right"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</template>
<style scoped>
/* .title {
    @apply text-[6.7vw] 2sm:text-[5.38vw] md:text-[3.38vw] font-bold;
    font-family: 'Inter', sans-serif;
} */
.title {
    @apply mt-[20px] md:mt-[60px] md:mb-[20px] 2md:w-[185px] md:w-[315px];
}

.card-name {
    @apply text-[2.6vw] 2sm:text-[1.92vw] md:text-[1.2vw] font-black text-[#0057ff];
    font-family: 'Noto Sans TC', sans-serif;
}

.card-text {
    @apply text-[1.68vw] 2sm:text-[1.28vw] md:text-[0.8vw] font-medium text-[#00000] mt-[0.50.8vw] tracking-[1.5px];
    font-family: 'Noto Sans TC', sans-serif;
}

.card-more {
    @apply text-[1.68vw] 2sm:text-[1.28vw] md:text-[0.8vw] text-[#0057ff] font-bold;
    font-family: 'Inter', sans-serif;
}

/*barton*/
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
}</style>
