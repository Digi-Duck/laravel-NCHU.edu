<script>
import fake from '/images/coursePage/fakeIMG.svg';
export default {
    data() {
        return {
            img:{
                fake
            },
            courses: [
                {
                    type: '單元手作',
                    name: '樂活陶 No10',
                    start_time: '2024.2.22',
                    price: '2600',
                    link: 'https://www.siileec.com/subject.php?sn=4346&fbclid=IwAR0NY-qTpIUc9M1FlK5-4kIfyjS8zi85ik-JIchGmuQzVL8tKJIm8XvPso4',
                    img_path: '/images/coursePage/fakeIMG.svg',
                },
                {
                    type: '兒童營隊',
                    name: '鹿角蕨上板x水苔實作體驗',
                    start_time: '2024.1.27',
                    price: '600',
                    link: 'https://www.siileec.com/subject.php?sn=4289',
                    img_path: '/resources/images/coursePage/fakeIMG.svg',
                },
                {
                    type: '運動課程',
                    name: '功能性運動訓練',
                    start_time: '2024.2.23',
                    price: '2500',
                    link: 'https://siileec.com/subject.php?sn=4384&fbclid=IwAR24E_g4DnDJsphbhOk9OrTqnCNXBDeSOm9pTAIwusKzG1AL77I_Nih6z9k',
                    img_path: '/resources/images/coursePage/fakeIMG.svg',
                },
                {
                    type: '職業訓練',
                    name: '綠能溫室智慧環控與植物栽培管理實務班',
                    start_time: '2024.3.21',
                    price: '0',
                    link: 'https://elite.taiwanjobs.gov.tw/ClassSearch/Detail?UUID=B38ED0FDE9B34989A0DA2D56403CBEBE&SOURCE_TYPE=ELIT&fbclid=IwAR0JwbuW0bb_YR8W127wlIALqepRInPjsx8aja0hIwlZbrqvw08S82XAKhI',
                    img_path: '/resources/images/coursePage/fakeIMG.svg',
                },
                {
                    type: '專業證照',
                    name: '色彩學證照輔導：配色技巧Ｘ實戰運用',
                    start_time: '2024.1.23',
                    price: '6300',
                    link: 'https://www.siileec.com/subject.php?sn=4341',
                    img_path: '/resources/images/coursePage/fakeIMG.svg',
                },
            ],
            selectedCourse: { title: '全部課程', },
        }
    },
}
</script>
<template>
    <div class="w-[85%]  m-auto flex  flex-col">
        <div class="title w-[100%] ">網站資訊</div>
        <div class="w-[90%] md:w-[80%] m-auto">
            <select v-model="selectedCourse.title" class="w-full cursor-pointer ">
                <option>全部課程</option>
                <option>最新課程</option>
                <option>兒童營隊</option>
                <option>單元手作</option>
                <option>運動課程</option>
                <option>職業訓練</option>
                <option>專業證照</option>
            </select>
        </div>
        <div class="w-[90%]  ml-[13.8vw] 2sm:ml-[7.2vw] md:ml-[10.5vw] md:w-[80%]  py-[1%]  flex gap-[3%] flex-wrap justify-start">
            <div v-for="course in courses" :key="course.id" class="flex 2sm:flex-col bg-[#ffffff] w-[55vw] mb-[2.5vw] 2sm:w-[22vw] 2sm:h-[29.72vw] 2sm:mb-[2.5vw]
            md:mb-[1.5vw] md:w-[14.32vw] md:h-[19.06vw]">
                <div class=" w-[22vw] h-[14.34vw]  md:w-[14.32vw] md:h-[9.37vw] flex ">
                    <img class="h-full mt-[0.8vw]" :src="img.fake" alt="">
                </div>
                <div class="flex flex-col justify-start items-start h-[100%] w-[33vw] 2sm:w-[22vw] md:w-[14.32vw] px-[1.6vw] pt-[1.3vw] md:px-[0.78vw] md:pt-[0.52vw]">
                    <h1 class="card-name ">{{ course.name }}</h1>
                    <ul>
                        <li class="card-text ">課程日期 | {{ course.start_time }} </li>
                        <li class="card-text ">課程價格 | ${{ course.price }}</li>
                    </ul>
                    <div class="flex  ml-auto mt-auto mb-[1.04vw] px-[0.78vw] card-more"><a :href="course.link">了解更多 <i class="fa-solid fa-arrow-right"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</template>
<style scoped>
.title {
    @apply text-[6.7vw] 2sm:text-[5.38vw] md:text-[3.38vw] font-bold;
    font-family: 'Inter', sans-serif;
}
.card-name{
    @apply text-[2.6vw] 2sm:text-[1.92vw]  md:text-[1.2vw] font-black text-[#0057ff] ;
    font-family: 'Noto Sans TC', sans-serif;
}
.card-text{
    @apply text-[1.68vw]  2sm:text-[1.28vw]  md:text-[0.8vw] font-medium text-[#00000] mt-[0.50.8vw] tracking-[1.5px];
    font-family: 'Noto Sans TC', sans-serif;
}
.card-more{
    @apply text-[1.68vw] 2sm:text-[1.28vw]  md:text-[0.8vw] text-[#0057ff] font-bold ;
    font-family: 'Inter', sans-serif;
}
</style>
