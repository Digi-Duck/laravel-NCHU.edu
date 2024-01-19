<script>
</script>
<template>
    <div class="flex justify-center items-center">
        <section class="w-[85%] h-[100vh] flex justify-center items-center bg-slate-100">
            <div class="w-[60%] h-[72%] bg-red-300">
                <div class="cards h-[72%] relative">
                    <div class="card"></div>
                    <div class="card"></div>
                    <div class="card"></div>
                    <div class="card flex flex-col justify-end">
                        <div class="card-title ">一般專案經理政照培訓班</div>
                        <div class="card-tags flex ">
                            <div class="card-tag">#新手</div>
                            <div class="card-tag">#培訓班</div>
                            <div class="card-tag">#專案管理</div>
                            <div class="card-tag">#APMA證照</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-[40%] h-[72%] bg-blue-300">
                <div class="mt-[-15%] ml-[12%] w-[80%] h-[40%] bg-yellow-300 ">
                    <div class="provide w-[100%] h-[100%] ml-[5%]">
                        <div class="w-[100%] ml-[6%] ms-[30%px] arrow tracking-[-3px]"><span class="mr-[20px]">Latest</span >最新</div>
                        <div class="w-[100%] ml-[19%] mt-[-10%] flex gap-[15px] tracking-[-3px] row">課程<span
                                class="mt-[15px] tracking-[-3px]">course</span>
                        </div>
                    </div>
                </div>
                <div class="w-[100%] h-[60%] mt-[15%] flex flex-col justify-end bg-red-200">
                    <div class="w-[100%] title pl-[15%]  bg-green-500 mb-[20px]">一般專案經理證照培訓班</div>
                    <div class="w-[100%] intro pl-[15%] bg-green-500 mb-[70px] ">專案經理是現在團隊中不可或缺的角色，擁有專業的證照能夠提升個人競爭力並開啟更廣況的職業發展道路。</div>
                    <div class="w-[25%] mt-[20px] ml-[77%] more"><a href="">了解更多 → </a></div>
                </div>

            </div>
        </section>
    </div>
</template>
<style scoped>
.card {
    @apply w-[95%] h-[100%] p-[30px] absolute cursor-pointer;
    transition: 0.5s ease-in-out;
    transform-origin: bottom center;
}

.card:nth-child(1) {
    top: 0;
    left: 0;
    background-color: #21d2db;
}

.card:nth-child(2) {
    top: 13%;
    left: 0px;
    background-color: #ffcc00;
}

.card:nth-child(3) {
    top: 26%;
    left: 0px;
    background-color: #db5621
}

.card:nth-child(4) {
    top: 39%;
    background-color: #7dbda8;

}

.card-title {
    @apply text-[#ffffff] text-[38px] font-bold;
    font-family: 'Noto Sans TC', sans-serif;
}

.card-tag {
    @apply bg-[#ffffff] text-[19px] mr-[10px] rounded-full px-[20px] py-[8px] font-bold mt-[15px];
    font-family: 'Inter', sans-serif;
}

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

.row {
    position: relative;
}

.row:after {
    content: "";
    position: absolute;
    top: 58%;
    left: 58%;
    width: 120px;
    height: 110px;
    background-image: url('/images/banner/blue-row.png');
    background-repeat: no-repeat;
    background-position-x: right;
    background-size: 85px 85px;
    rotate: 90deg;
}

.title {
    @apply text-[72px] text-[#0054ff] font-black;
    font-family: 'Noto Sans TC', sans-serif;
    line-height: 1.1
}

.intro {
    @apply text-[20px] font-bold;
    line-height: 1.6;
    font-family: 'Noto Sans TC', sans-serif;
}

.more {
    @apply text-[20px] font-extrabold;
    font-family: 'Inter', sans-serif;
}
</style>


