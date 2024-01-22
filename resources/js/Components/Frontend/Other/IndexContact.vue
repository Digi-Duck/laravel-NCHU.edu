<script>
import facebook from '/images/FooterIcon/FaceBookIcon.svg';
export default {
    data() {
        return {
            images:{
                facebook,
            }
        }
    }
}
</script>
<template>
    <div class="contact flex justify-center items-center h-[100vh]">
        <div class="w-[50%]">
            <iframe class="w-[90%]"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3641.446104629765!2d120.67400941162171!3d24.1209667783293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693d02fbdf00cf%3A0xca558b13873d5a59!2zNDAy5Y-w5Lit5biC5Y2X5Y2A6IiI5aSn6LevMTQ16Jmf!5e0!3m2!1szh-TW!2stw!4v1705892760083!5m2!1szh-TW!2stw"
                height="420" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="mt-[-50px]">
            <div class="mt-[-10%] mb-[100px] w-[100%] h-[40%] ">
                <div class="provide w-[100%] h-[100%] ">
                    <div class="w-[517px] pl-[6%] arrow tracking-[-3px] "><span class="mr-[20px]">Contact</span>聯絡</div>
                    <div class=" w-[517px]  pl-[23%] mt-[-10%] flex gap-[15px] tracking-[-3px] row ">我們<span
                            class="mt-[15px] tracking-[-3px]">us</span>
                    </div>
                </div>
            </div>
            <div class="w-[50%] pl-[6%] mt-[-10px]">
                <Link href="" class=""><img class="" :src="images.facebook" alt=""></Link>
                <pre class="mt-[30px] mb-[13px]"><i class="fa-solid fa-phone mr-[11%]"></i> 04 2284 0455</pre>
                <pre class="mb-[13px]"><i class="fa-solid fa-envelope mr-[11%] "></i> hello20131005@gmail.com</pre>
                <pre class="ps-[5px]"><i class="fa-solid fa-location-dot mr-[15%]"></i>40227台中市南區興大路145號</pre>
                <pre class="ps-[25%]">(綜合教學大樓8樓804、805室)</pre>
            </div>
        </div>
    </div>
</template>
<style scoped>
.contact{
    height: calc(100vh - 60px);
}
.provide {
    @apply text-[95px] font-bold;
    font-family: 'Noto Sans TC', sans-serif;
}

.provide span {
    @apply text-[50px] font-bold;
    font-family: 'Inter', sans-serif;
}

/* Row Styles */
.row {
    position: relative;
}

.row:after {
    @apply absolute top-[58%] left-[78%] w-[120px] h-[110px] bg-no-repeat bg-right bg-[length:85px_85px] rotate-90;
    content: "";
    background-image: url('/images/banner/blue-row.png');
}
a{
    @apply fill-[#4f4f4f] text-[35px] font-[900];
}
a :hover{
    @apply text-[#0057ff];
}
pre{
    @apply text-[25px] font-[600];
    font-family: 'Noto Sans TC', sans-serif;
}
.fa-solid{
    @apply text-[30px];
}
</style>
