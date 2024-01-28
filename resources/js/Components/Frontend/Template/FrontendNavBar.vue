<script>
import logo from '/images/logo/logo.svg';
import smallLogo from '/images/logo/small-logo.svg';

export default {
    data() {
        return {
            images: {
                logo,
                smallLogo,
            },
            flag: false,
            about: false,
            lesson: false,
            news: false,
            screenWidth: false
        };
    },
    mounted() {
        this.checkScreenWidth();
        window.addEventListener('resize', this.checkScreenWidth);
    },
    methods: {
        check() {
            const ease = document.querySelector('.ham');
            ease.classList.toggle('active');
            this.flag = !this.flag;
            this.about = false;
            this.lesson = false;
            this.news = false;
        },
        checkScreenWidth() {
            this.screenWidth = window.innerWidth > 500;
        }
    }
};
</script>

<template>
    <nav class="fixed w-[100%] z-[4] top-0">
        <div class="all">
            <div class="menu">
                <img class="logo" :src="screenWidth ? images.logo : images.smallLogo" alt="">
                <ul class="list">
                    <li>
                        <Link href="/">首頁</Link>
                    </li>
                    <li>
                        <Link :href="route('about.index')">關於我們</Link>
                    </li>
                    <li>
                        <Link :href="route('all.course')">課程資訊</Link>
                    </li>
                    <li>
                        <Link :href="route('news.index')">最新消息</Link>
                    </li>
                </ul>
                <div class="fun-menu">
                    <label for="ham-menu-switch" class="ham-menu" @click="check()">
                        <div class="line line-1" :class="{ 'act': flag }"></div>
                        <div v-if="!flag" class="line line-2"></div>
                        <div class="line line-3" :class="{ 'act': flag }"></div>
                    </label>
                </div>
            </div>
            <ul class="ham">
                <label for="chevron-switch-1" class="chevron-label" @click="about = !about">
                    <li class="ham-list">
                        <span>關於我們</span> &nbsp
                        <i class="fa-solid fa-chevron-down" :style="{ 'display': about ? 'none' : 'inline-block' }"></i>
                        <i class="fa-solid fa-chevron-up" :style="{ 'display': about ? 'inline-block' : 'none' }"></i>
                    </li>
                    <ul class="sub-dropdown-menu" :class="{ 'sub-1': about, 'sub': !about }">
                        <li>
                            <Link href="">單位介紹</Link>
                        </li>
                        <li>
                            <Link href="">成員介紹</Link>
                        </li>
                        <li>
                            <Link href="">相關法規</Link>
                        </li>
                        <li>
                            <Link href="">表單下載</Link>
                        </li>
                        <li>
                            <Link href="">成果展示</Link>
                        </li>
                    </ul>
                </label>
                <label for="chevron-switch-2" class="chevron-label" @click="lesson = !lesson">
                    <li class="ham-list">
                        <span>課程資訊</span> &nbsp
                        <i class="fa-solid fa-chevron-down" :style="{ 'display': lesson ? 'none' : 'inline-block' }"></i>
                        <i class="fa-solid fa-chevron-up" :style="{ 'display': lesson ? 'inline-block' : 'none' }"></i>
                    </li>
                    <ul class="sub-dropdown-menu" :class="{ 'sub-2': lesson, 'sub': !lesson }">
                        <li>
                            <Link :href="route('all.course')">全部課程</Link>
                        </li>
                        <li>
                            <Link :href="route('latest.course')">最新課程</Link>
                        </li>
                        <li>
                            <Link :href="route('child.course')">兒童營隊</Link>
                        </li>
                        <li>
                            <Link :href="route('diy.course')">單元手作</Link>
                        </li>
                        <li>
                            <Link :href="route('sport.course')">運動課程</Link>
                        </li>
                        <li>
                            <Link :href="route('train.course')">職業訓練</Link>
                        </li>
                        <li>
                            <Link :href="route('major.course')">專業證照</Link>
                        </li>
                    </ul>
                </label>
                <label for="chevron-switch-3" class="chevron-label" @click="news = !news">
                    <li class="ham-list">
                        <span>消息資訊</span> &nbsp
                        <i class="fa-solid fa-chevron-down" :style="{ 'display': news ? 'none' : 'inline-block' }"></i>
                        <i class="fa-solid fa-chevron-up" :style="{ 'display': news ? 'inline-block' : 'none' }"></i>
                    </li>
                    <ul class="sub-dropdown-menu" :class="{ 'sub-3': news, 'sub': !news }">
                        <li>
                            <Link href="">本週消息</Link>
                        </li>
                        <li>
                            <Link href="">本月消息</Link>
                        </li>
                        <li>
                            <Link href="">半年內消息</Link>
                        </li>
                        <li>
                            <Link href="">所有消息</Link>
                        </li>
                    </ul>
                </label>
            </ul>
        </div>
        <div v-if="flag" class="mask"></div>
    </nav>
</template>

<style scoped>
.all {
    @apply w-[100%] h-[60px] bg-white flex items-center px-10 relative;
}

.logo {
    @apply w-[98px] h-[40px] mr-auto bg-contain bg-no-repeat;
}

.fun-menu {
    @apply w-[28px] flex items-center;
}

.list {
    @apply flex items-center justify-between;
}

.menu {
    @apply w-[100%] flex;
}

.menu ul li {
    @apply text-[16px] text-[#4f4f4f] font-[900] mr-[55px];
}

.ham-menu {
    @apply w-[28px] h-[24px] bg-transparent block relative;
}

.ham-menu .line {
    @apply w-[22px] h-[1px] bg-black absolute left-[50%];
    transform: translate(-50%, -50%);
    transition: 0.7s;
}

.ham {
    @apply w-[200px] text-[18px] text-[white] bg-[#0057FF] absolute top-[60px] right-[-200px] flex flex-col items-center gap-[20px] pt-[20px] z-[-1] rounded-bl-[300px] truncate;
    transition: 0.7s;
    height: calc(100vh - 60px);
}

.ham .sub-dropdown-menu {
    @apply text-[14px] truncate;
}

.ham .sub-dropdown-menu li {
    @apply mt-[10px];
}

.ham label {
    @apply ml-[10px];
}

.sub-1,
.sub-3 {
    height: 160px;
    transition: 0.5s;
}

.sub-2 {
    height: 220px;
    transition: 0.5s;
}

.sub {
    height: 0;
    transition: 0.5s;
}

.fa-solid {
    @apply text-[14px];
}

.active {
    transform: translate(-100%, 0);
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


.line-1.act {
    transform: translate(-50%, -50%) rotate(45deg);
    top: 50%;
}

.line-3.act {
    transform: translate(-50%, -50%) rotate(-45deg);
    top: 50%;
}

.mask {
    width: 100%;
    height: calc(100vh - 60px);
    position: absolute;
    z-index: -2;
    background-color: black;
    opacity: 0.5;
}

@media(max-width:768px) {
    .all {
        @apply px-[20px] justify-between;
    }

    .logo {
        @apply w-[86px] h-[32px] m-0;
    }

    .menu {
        @apply m-0 justify-between;
    }

    .menu ul {
        @apply w-[60%] justify-between;
    }

    .menu ul li {
        font-size: 14px;
        margin: 0px;
    }

    .ham {
        @apply w-0 h-0 text-[16px] p-0;
    }

    .ham .sub-dropdown-menu {
        @apply text-[12px];
    }

    .sub-1,
    .sub-3 {
        @apply h-[140px];
    }

    .sub-2 {
        @apply h-[200px];
    }

    .ham label {
        @apply ml-[0px] pr-[10px];
    }

    .fa-solid {
        @apply text-[10px];
    }

    .active {
        @apply w-[180px] h-[80vh] pl-[10px] pt-[20px];
    }
}

@media(max-width:500px) {
    .ham {
        @apply w-[100%] h-auto text-[18px] right-0 text-white gap-0 p-0 rounded-bl-[0px];
        top: -261px;
    }

    .ham-list {
        @apply text-center pl-[20px] py-[10px] border-y-[1px] border-white;
    }

    .active {
        transform: translate(0, 321px);
    }

    .logo {
        @apply w-[28px] h-[30px] block m-auto;
        transform: translate(50%, 0%);
    }

    .ham label {
        @apply w-full pr-0;
    }

    .ham .sub-dropdown-menu {
        @apply text-[14px] flex flex-col items-center;
    }

    .sub-1,
    .sub-2,
    .sub-3 {
        @apply mb-[10px];
    }

    .sub-1 {
        @apply h-[160px];
    }

    .sub-2 {
        @apply h-[230px];
    }

    .sub-3 {
        @apply h-[130px];
    }

    .menu ul {
        display: none;
    }
}</style>
