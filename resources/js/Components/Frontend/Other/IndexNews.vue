<script>
export default {
    data() {
        return {

        }
    }
}
</script>
<template>
    <div class="w-[85%] m-auto">
        <div class="title">
            <div class="w-[517px] mt-[-15px] ms-[45px]">最新<span class="tracking-[-3px]"> Latest</span></div>
            <div class="w-[517px] mt-[-40px] ml-[50px] flex gap-[15px] arrow"><span class="mt-[15px] tracking-[-3px]">news
                </span>消息
            </div>
        </div>
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
                <div class="truncate">包含職業訓練、兒童營隊、專業證照、運動課程</div>
                <div><i class="fa-solid fa-arrow-right"></i></div>
            </Link>
            <Link class="news">
                <div>2023.01.01</div>
                <div class="truncate">包含職業訓練、兒童營隊、專業證照、運動課程</div>
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
.all-news{
    @apply  w-[100%] flex flex-col justify-center mt-[60px] ml-[15%];
}
.news{
    @apply w-[80%] py-[10px] text-[1.4vw] font-[800] border-b-[0.2vw] border-black flex justify-center gap-[10%];
}
.news:hover{
    @apply text-[#0057ff] duration-500;
}
@media(max-width:768px){
    .all-news{
        @apply ml-[0];
    }
    .news{
        @apply w-[100%] text-[1.9vw];
    }
}
</style>
