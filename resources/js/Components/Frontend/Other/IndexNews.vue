<script>
import latest from '/images/main/news.png';
export default {
    data() {
        return {
            images:{
                latest,
            }
        }
    }
}
</script>
<template>
    <div class="w-[83%] m-auto">

        <!-- <div class="title">
            <div class="w-[517px] mt-[-15px] ms-[45px]">最新<span class="tracking-[-3px]"> Latest</span></div>
            <div class="w-[517px] mt-[-40px] ml-[50px] flex gap-[15px] arrow"><span class="mt-[15px] tracking-[-3px]">news
                </span>消息
            </div>
        </div> -->
        <img class="w-[28%]" :src="images.latest" alt="">
        <Link class="more">了解更多</Link>
        <div class="all-news">
            <Link class="news">
                <div>2023.01.01</div>
                <div>包含職業訓練、兒童營隊、專業證照、運動課程</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
            </Link>
            <Link class="news">
                <div>2023.01.01</div>
                <div>包含職業訓練、兒童營隊、專業證照、運動課程</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
            </Link>
            <Link class="news">
                <div>2023.01.01</div>
                <div>包含職業訓練、兒童營隊、專業證照、運動課程</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
            </Link>
            <Link class="news">
                <div>2023.01.01</div>
                <div>包含職業訓練、兒童營隊、專業證照、運動課程</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
            </Link>
            <Link class="news">
                <div>2023.01.01</div>
                <div>包含職業訓練、兒童營隊、專業證照、運動課程</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
            </Link>
        </div>

    </div>
</template>
<style scoped>
.title {
    @apply w-[32%] h-[252px] text-[95px] font-[700] pt-[10px] flex flex-col;
}

.title span {
    @apply text-[53%] font-[800];
}

.title .arrow {
    position: relative;
}

.title .arrow::after {
    content: "";
    @apply absolute top-[75%] left-[-5%] w-[120px] h-[110px] bg-no-repeat bg-right bg-[length:85px_85px];
    background-image: url('/images/banner/blue-row.png');
}
.more{
    @apply text-[1.15vw] font-[700] border-b-[0.25vw] border-black hover:text-[#0057ff] hover:border-[#0057ff] float-right translate-y-[-2.5vw]  translate-x-[-5vw];
}
.all-news{
    @apply  w-[100%] flex flex-col justify-center ml-[8vw]  translate-y-[-2vw];
}
.news{
    @apply w-[80%] py-[10px] text-[1.53vw] font-[800] border-b-[0.25vw] border-black flex justify-between gap-[5vw];
}
.news:hover{
    @apply text-[#0057ff] duration-500;
}
@media(max-width:768px){
    .more{
        @apply translate-x-0;
    }
    .all-news{
        @apply ml-[0];
    }
    .news{
        @apply w-[100%] text-[1.9vw];
    }
}
@media(max-width:500px){
    img{
        @apply w-[50%] m-auto;
    }
    .more{
        @apply hidden;
    }
    .all-news{
        @apply ml-[0];
    }
    .news{
        @apply text-[3vw] flex-col gap-0;
    }
    i{
        @apply hidden;
    }
}
</style>
