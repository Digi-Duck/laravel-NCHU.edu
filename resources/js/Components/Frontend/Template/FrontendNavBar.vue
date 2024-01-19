<script>
import logo from '/images/logo/logo.svg';

export default {
    data() {
        return {
            images: {
                logo,
            },
            flag: false,
        };
    },
    // computed:{
    //     check(){
    //         const ease = document.querySelector('.ham')
    //         if(flag){
    //             ease.classList.add('active');
    //         }
    //     }
    // }
};
</script>

<template>
    <nav class="h-[60px] bg-white flex items-center justify-between px-10 relative">
        <div class="logo" :style="{ backgroundImage: `url(${images.logo})` }"></div>
        <div class="menu">
            <ul class="flex">
                <li>
                    <Link href="">認識我們</Link>
                </li>
                <li>
                    <Link href="">課程分類</Link>
                </li>
                <li>
                    <Link href="">最新課程</Link>
                </li>
                <li>
                    <Link href="">登入會員</Link>
                </li>
                <li>
                    <Link href="">關於我們</Link>
                </li>
                <div class="fun-menu">
                    <input id="ham-menu-switch" type="checkbox" @click="flag = !flag">
                    <label for="ham-menu-switch" class="ham-menu">
                        <div class="line line-1"></div>
                        <div class="line line-2"></div>
                        <div class="line line-3"></div>
                    </label>
                </div>
            </ul>
        </div>
        <ul v-if="flag" class="ham">
            <li>單元介紹</li>
            <li>成員介紹</li>
            <li>相關法規</li>
            <li>成果展示</li>
            <li>課程總覽</li>
            <li>最新課程</li>
        </ul>
    </nav>
</template>

<style scoped>
@keyframes ease{
    0%{
        right: -11%;
    }
    50%{
        right: 0;
    }
}
.logo {
    background-color: #fff;
    width: 98px;
    height: 40px;
    background-size: contain;
    background-repeat: no-repeat;
}

.menu ul li {
    font-size: 16px;
    color: #4f4f4f;
    margin-right: 55px;
    font-weight: 900;
}

.ham-menu {
    width: 28px;
    height: 24px;
    background-color: transparent;
    display: block;
    position: relative;
    float: left;
}

.ham-menu .line {
    width: 22px;
    height: 1px;
    background-color: black;
    position: absolute;
    left: 50%;
    transform: translate(-50%, -50%);
    transition: 0.7s;
}
.ham{
    @apply  w-[11%] h-[890px] bg-[#0057FF] absolute top-[60px] right-0 text-white flex flex-col items-center gap-[20px] pt-[20px] z-[2] rounded-bl-[300px];
    animation: ease 1s linear 0s;
    /* transition: 1s; */
}
.active{

}
.ham-menu .line-1 {
    top: 5.5px;
}

.ham-menu .line-2 {
    top: 11.5px;
}

.ham-menu .line-3 {
    top: 17.5px;
}

#ham-menu-switch {
    display: none;
}

#ham-menu-switch:checked+.ham-menu .line-1 {
    transform: translate(-50%, -50%) rotate(45deg);
    top: 50%;
}

#ham-menu-switch:checked+.ham-menu .line-2 {
    display: none;
}

#ham-menu-switch:checked+.ham-menu .line-3 {
    transform: translate(-50%, -50%) rotate(-45deg);
    top: 50%;
}</style>
