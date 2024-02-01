<!-- 前台頁尾組件 -->

<script>
import { document } from 'postcss';
import logo from '/images/logo/logo.svg';

window.onscroll = function () {
    scrollFunction();
}

export default {
    data() {
        return {
            images: {
                logo,
            },
        };
    },
    methods: {

    },

};
</script>

<template>
    <footer class="w-[100%]  bg-white flex justify-center ">
        <div class="main w-[79%]">
            <div class="top">
                <div class="top-left">
                    <div class="logo">
                        <img class="w-[100%]" :src="images.logo" alt="中興大學推廣組Logo">
                    </div>
                    <div class="word">
                        <pre class="h1">聯絡電話  04 2284 0455</pre>
                        <pre class="h1">電子信箱  hello20131005@gmail.com</pre>
                        <pre class="h1">學校地址  40227台中市南區興大路145號(綜合教學大樓8樓804、805室)</pre>
                        <pre class="h1">製作人員  王亞筑 陳喬旭 蘇煒峻 林聖翰 陳瑋祥</pre>
                    </div>
                </div>
                <div class="top-right flex justify-end ">
                    <div class="content-3">
                        <div class="h2">消息資訊</div>
                        <div>
                            <Link class="h3" href="">最新消息</Link>
                        </div>
                    </div>
                    <div class="content-3">
                        <div class="h2">關於我們</div>
                        <div>
                            <Link class="h3" href="">單位介紹</Link>
                        </div>
                        <div>
                            <Link class="h3" href="">成員介紹</Link>
                        </div>
                        <div>
                            <Link class="h3" href="">相關法規</Link>
                        </div>
                        <div>
                            <Link class="h3" href="">成果展示</Link>
                        </div>
                        <div>
                            <Link class="h3" href="">表單下載</Link>
                        </div>
                    </div>
                    <div class="content-3">
                        <div class="h2"><a :href="route('course.type', 'all')">課程資訊</a></div>
                        <div v-for="type in $page.props.classType.type" :key="type.id">
                            <Link class="h3" :href="route('course.type', type.id)">{{ type.name }}</Link>
                        </div>
                    </div>
                </div>
            </div>
            <div class="word-small">
                <pre class="h1">聯絡電話  04 2284 0455</pre>
                <pre class="h1">電子信箱  hello20131005@gmail.com</pre>
                <p class="h1 flex flex-wrap">學校地址 &nbsp;40227台中市南區興大路145號(綜合教學大樓8樓804、805室)</p>
                <pre class="h1">製作人員  王亞筑 陳喬旭 蘇煒峻 林聖翰 陳瑋祥</pre>
            </div>
            <div class="bottom flex ">
                <div class="formatH5">
                    <div class="h5 md:text-[0.8vw]">©2024 International College of Innovation and Industry Liaison, N.C.H.U.
                    </div>
                </div>
                <div class="flex gap-1 tabs">
                    <div class="informationBar">
                        <Link class="h4" :href="route('web.index')">隱私權聲明 |</Link>
                    </div>
                    <div class="informationBar">
                        <Link class="h4" :href="route('web.index')">智慧財產權聲明 |</Link>
                    </div>
                    <div class="informationBar">
                        <Link class="h4" :href="route('web.index')">網站導覽 |</Link>
                    </div>
                    <div class="informationBar">
                        <Link class="h4" href="">網站意見回饋</Link>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>

<style scoped>
* {
    scroll-behavior: smooth;
}

.word-small {
    display: none;
    flex-direction: column;
    width: 100%;
    margin-top: 10%;
}

.main {
    display: flex;
    align-items: center;
    height: 100%;
    flex-direction: column;
}

.top {
    height: 70%;
    width: 100%;
    margin-top: 40px;
    display: flex;
}

.top-left {
    width: 50%;
    height: 100%;
}

.logo {
    width: 45%;
    margin-bottom: 18%;
}

.word {
    width: 100%;
    margin-bottom: 15%;
}

.h1 {
    font-size: 18px;
    margin-bottom: 1%;
    font-weight: bold;
    font-family: 'Noto Sans TC', sans-serif;
}

.top-right {
    width: 50%;
    height: 100%;
}

.h2 {
    margin-bottom: 1%;
    font-size: 24px;
    font-weight: bold;
}

.h3 {
    font-size: 20px;
}

.h4 {
    line-height: 27px;
    font-size: 16px;
    font-family: 'Noto Sans TC', sans-serif;
}

.formatH5 {
    display: flex;
    justify-content: center;
    align-items: center;
    padding-top: 0.5vw;
}

.content-3 {
    display: flex;
    flex-direction: column;
    align-items: center;
    height: 100%;
    margin-left: 8%;
    gap: 4%;
}

.bottom {
    width: 100%;
    height: 27px;
    margin-bottom: 5%;
    position: relative;
    justify-content: space-between;
}

.bottom::before {
    content: "";
    position: absolute;
    right: -21%;
    top: -250%;
    background-image: url('/images/FooterIcon/Facebook-blue.svg');
    filter: grayscale(100%);
    background-repeat: no-repeat;
    background-size: contain;
    background-position: center;
    width: 50%;
    height: 80%;
}

.bottom:hover::before {
    filter: none;
}



@media (max-width:1440px) {

    .logo {
        width: 60%;
        margin-bottom: 20%;
    }

    .h1 {
        font-size: 13px;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .h2 {
        margin-bottom: 10px;
        font-size: 17px;
        font-weight: bold;
    }

    .h3 {
        font-size: 15px;
    }

    .content-3 {
        gap: 3.5%;
    }

    .h4 {
        font-size: 13px;
    }

    .bottom::before {
        top: -200%;
        right: -21%;
        width: 50%;
        height: 50%;
    }
}

@media (max-width:1220px) {

    .logo {
        width: 50%;
        margin-bottom: 18%;
    }

    .h1 {
        font-size: 11px;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .h2 {
        margin-bottom: 10px;
        font-size: 15px;
        font-weight: bold;
    }

    .h3 {
        font-size: 13px;
    }

    .h4 {
        font-size: 11px;
    }

    .bottom::before {
        top: -180%;
        right: -21%;
        width: 50%;
        height: 50%;
    }
}

@media (max-width:1150px) {
    .bottom::before {
        top: -100%;
        right: -20%;
        width: 50%;
        height: 55%;
    }
}

@media (max-width:1024px) {

    .logo {
        width: 50%;
        margin-bottom: 18%;
    }

    .h1 {
        font-size: 10px;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .h2 {
        margin-bottom: 10px;
        font-size: 14px;
        font-weight: bold;
    }

    .h3 {
        font-size: 12px;
    }

    .h4 {
        font-size: 10px;
    }

    .bottom::before {
        top: -90%;
        right: -21%;
        width: 50%;
        height: 40%;
    }
}

@media (max-width:960px) {

    .logo {
        width: 48%;
    }

    .h1 {
        font-size: 9px;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .h2 {
        margin-bottom: 10px;
        font-size: 13px;
        font-weight: bold;
    }

    .h3 {
        font-size: 11px;
    }

    .content-3 {
        gap: 3%;
    }

    .h4 {
        font-size: 9px;
    }

    .bottom::before {
        top: -65%;
        right: -16%;
        width: 40%;
        height: 30%;
    }
}

@media (max-width:860px) {


    .h1 {
        font-size: 8px;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .h2 {
        margin-bottom: 10px;
        font-size: 12px;
        font-weight: bold;
    }

    .h3 {
        font-size: 10px;
    }

    .content-3 {
        gap: 2%;
    }

    .h4 {
        font-size: 8px;
    }

    .bottom::before {
        top: -60%;
        right: -16%;
        width: 40%;
        height: 25%;
    }
}

@media (max-width:800px) {

    .bottom::before {
        top: -70%;
        right: -16%;
        width: 40%;
        height: 25%;
    }

    .content-3 {
        gap: 1%;
    }
}

@media (max-width:768px) {

    .logo {
        width: 80%;
        margin-bottom: 55%;
    }

    .bottom {
        flex-direction: column-reverse;
    }

    .bottom::before {
        top: -28vh;
        left: -18.5%;
        width: 50%;
        height: 50%;
    }

    .h1 {
        font-size: 14px;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .h2 {
        margin-bottom: 10px;
        font-size: 15px;
        font-weight: bold;
    }

    .h3 {
        font-size: 13px;
    }

    .h4 {
        font-size: 12px;
        line-height: 12px;
        text-align: center;
    }

    .h5 {
        font-size: 1.5vw;
    }

    .tabs {
        justify-content: center;
    }

    .word {
        width: 100%;
        margin-bottom: 40%;
    }

    .main {
        width: 64%;
    }

}


@media (max-width:740px) {

    .logo {
        width: 75%;
    }

    .bottom::before {
        top: -26vh;
    }

    .h1 {
        font-size: 13px;
        margin-bottom: 4px;
    }

    .h2 {
        font-size: 14px;
    }

    .h3 {
        font-size: 12px;
    }

    .h4 {
        font-size: 11px;
        line-height: 11px;
    }

}

@media (max-width:691px) {

    .logo {
        width: 70%;
    }

    .bottom::before {
        top: -25vh;
    }

    .h1 {
        font-size: 12px;
        margin-bottom: 4px;
    }

    .h2 {
        font-size: 13px;
    }

    .h3 {
        font-size: 11px;
    }

    .h4 {
        font-size: 10px;
        line-height: 10px;
    }

}

@media (max-width:640px) {


    .h1 {
        font-size: 11px;
        margin-bottom: 4px;
    }

    .h2 {
        font-size: 12px;
    }

    .h3 {
        font-size: 10px;
    }

    .h4 {
        font-size: 9px;
        line-height: 9px;
    }

}

@media (max-width:592px) {

    .bottom::before {
        top: -21vh;
        height: 45%;
    }

    .logo {
        width: 60%;
    }

    .h1 {
        font-size: 10px;
        margin-bottom: 4px;
    }

    .h2 {
        font-size: 11px;
    }

    .h3 {
        font-size: 9px;
    }

    .h4 {
        font-size: 8px;
        line-height: 8px;
    }

}

@media (max-width:543px) {


    .h1 {
        font-size: 9px;
        margin-bottom: 4px;
    }

    .h2 {
        font-size: 10px;
    }

    .h3 {
        font-size: 8px;
    }

    .h4 {
        font-size: 7px;
        line-height: 7px;
    }


    .bottom::before {
        top: -19vh;
        height: 40%;
    }

}

@media (max-width:500px) {

    .main {
        position: relative;
        height: 200vw;
    }

    .h1 {
        font-size: 3.8vw;
    }

    .word {
        display: none;
    }

    .top {
        flex-direction: column;
        height: auto;
    }

    .top-right {
        flex-direction: column;
        height: auto;
    }

    .top-left {
        height: 10%;
    }

    .content-3 {
        margin-left: 0;
        margin-bottom: 25px;
        height: auto;
        align-items: flex-start;
    }

    .h2 {
        margin: 0;
        font-size: 4.266vw;
    }

    .bottom::before {
        height: 3.4vw;
        left: -8.5vw;
        top: -17vh;
    }

    .h3 {
        line-height: 32px;
        font-size: 3.8vw;
    }

    .bottom {
        width: 100%;
        height: auto;
        position: absolute;
        bottom: 0;
    }

    .word-small {
        display: block;
    }

    .word-small .h1 {
        font-size: 3.5vw;
    }

    .tabs {
        justify-content: center;
    }

    .informationBar {
        padding-top: 80px;
    }

    .h4 {
        text-align: left;
        font-size: 2.6vw;
        line-height: 10px;
    }

    .logo {
        width: 80%;
    }


    .h5 {
        font-size: 2.2vw;
    }
}

@media (max-width:451px) {

.bottom::before {
    height: 3.4vw;
    left: -8.5vw;
    top: -10vh;
}
.word-small .h1 {
        font-size: 3vw;
    }

}
</style>
