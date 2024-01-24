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
    <div class="w-[85%] h-[100vh] m-auto flex justify-center flex-col">
        <div class="">
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
        <div class="w-full h-[80%] py-[4%]  flex gap-[3%] flex-wrap justify-center">
            <div v-for="course in courses" :key="course.id" class="flex flex-col bg-[#ffffff] w-[22%] h-[55%]">
                <div class=" h-[195px]">
                    <img class="w-full" :src="img.fake" alt="">
                </div>
                <div class="flex flex-col justify-start items-start h-[52%] px-[6%] pt-[10%]">
                    <h1 class="card-name">{{ course.name }}</h1>
                    <ul>
                        <li class="card-text">課程日期 | {{ course.start_time }} </li>
                        <li class="card-text">課程價格 | ${{ course.price }}</li>
                    </ul>
                </div>
                <div class="flex justify-end mt-auto mb-[20px] px-[6%] card-more"><a :href="course.link">了解更多 <i class="fa-solid fa-arrow-right"></i></a></div>
            </div>
            <div class="flex flex-col bg-[#ffffff] w-[22%] h-[55%] opacity-0"></div>
            <div class="flex flex-col bg-[#ffffff] w-[22%] h-[55%] opacity-0"></div>
            <div class="flex flex-col bg-[#ffffff] w-[22%] h-[55%] opacity-0"></div>
        </div>
    </div>
</template>
<style scoped>
.card-name{
    @apply text-[22px] font-black text-[#0057ff] ;
    font-family: 'Noto Sans TC', sans-serif;
}
.card-text{
    @apply text-[18] font-medium text-[#00000] mt-[10px] tracking-[1.5px];
    font-family: 'Noto Sans TC', sans-serif;
}
.card-more{
    @apply text-[16px] text-[#0057ff] font-bold ;
    font-family: 'Inter', sans-serif;
}
</style>
