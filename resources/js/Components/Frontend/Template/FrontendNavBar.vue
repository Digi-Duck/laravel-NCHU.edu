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
        };
    },
    methods: {
        check() {
            const ease = document.querySelector('.ham');
            ease.classList.toggle('active');
            this.flag = !this.flag;
        },
        // logoChange(){
        //     if (window.innerWidth <= 500){
        //         return this.images.smallLogo;
        //     } else{
        //         return this.images.logo;
        //     }
        // },

    }
};
</script>

<template>
    <nav class="fixed w-[100%] z-[4] top-0">
        <div class="all">
            <div class="menu">
                <img class="logo" :src="images.logo" alt="">
                <img class="small-logo" :src="images.smallLogo" alt="">
                <ul class="list">
                    <li>
                        <Link href="/">首頁</Link>
                    </li>
                    <li>
                        <Link :href="route('about.index')">關於我們</Link>
                    </li>
                    <li>
                        <Link href="">課程資訊</Link>
                    </li>
                    <li>
                        <Link href="">最新消息</Link>
                    </li>
                </ul>
                <div class="fun-menu">
                    <input id="ham-menu-switch" type="checkbox" @click="check()">
                    <label for="ham-menu-switch" class="ham-menu">
                        <div class="line line-1"></div>
                        <div class="line line-2"></div>
                        <div class="line line-3"></div>
                    </label>
                </div>
            </div>
            <ul class="ham">
                <input type="checkbox" id="chevron-switch-1" class="chevron-switch hidden">
                <label for="chevron-switch-1" class="chevron-label">
                    <li class="ham-list">
                        <span>關於我們</span> &nbsp
                        <i class="fa-solid fa-chevron-down"></i>
                        <i class="fa-solid fa-chevron-up hidden"></i>
                    </li>
                    <ul class="sub-dropdown-menu">
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
                <input type="checkbox" id="chevron-switch-2" class="chevron-switch hidden">
                <label for="chevron-switch-2" class="chevron-label">
                    <li class="ham-list">
                        <span>課程資訊</span> &nbsp
                        <i class="fa-solid fa-chevron-down"></i>
                        <i class="fa-solid fa-chevron-up hidden"></i>
                    </li>
                    <ul class="sub-dropdown-menu sub-2">
                        <li>
                            <Link href="">全部課程</Link>
                        </li>
                        <li>
                            <Link href="">最新課程</Link>
                        </li>
                        <li>
                            <Link href="">兒童營隊</Link>
                        </li>
                        <li>
                            <Link href="">單元手作</Link>
                        </li>
                        <li>
                            <Link href="">運動課程</Link>
                        </li>
                        <li>
                            <Link href="">職業訓練</Link>
                        </li>
                        <li>
                            <Link href="">專業證照</Link>
                        </li>
                    </ul>
                </label>
                <input type="checkbox" id="chevron-switch-3" class="chevron-switch hidden">
                <label for="chevron-switch-3" class="chevron-label">
                    <li class="ham-list">
                        <span>消息資訊</span> &nbsp
                        <i class="fa-solid fa-chevron-down"></i>
                        <i class="fa-solid fa-chevron-up hidden"></i>
                    </li>
                    <ul class="sub-dropdown-menu">
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
    width: 98px;
    height: 40px;
    background-size: contain;
    background-repeat: no-repeat;
    margin-right: auto;
}

.fun-menu {
    @apply w-[28px] flex items-center;
}

.small-logo {
    @apply hidden;
}

.list {
    @apply flex items-center justify-between;
}

.menu {
    @apply w-[100%] flex;
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

.ham {
    @apply w-[200px] text-[18px] bg-[#0057FF] absolute top-[60px] right-[-200px] text-white flex flex-col items-center gap-[20px] pt-[20px] z-[3] rounded-bl-[300px];
    transition: 1s;
    height: calc(100vh - 60px);
}

.ham .sub-dropdown-menu {
    @apply text-[14px] ml-[1px] truncate;
}

.ham .sub-dropdown-menu li {
    @apply mt-[10px];
}

.ham label {
    @apply ml-[10px];
}

.chevron-switch:checked+label li i:nth-of-type(1) {
    display: none;
}

.chevron-switch:checked+label li i:nth-of-type(2) {
    display: inline-block;
}

.chevron-switch:checked+label .sub-dropdown-menu {
    height: 160px;
    transition: 0.5s;
}

.chevron-switch:checked+label .sub-2 {
    height: 220px;
    transition: 0.5s;
}

.chevron-switch:not(:checked)+label .sub-dropdown-menu {
    height: 0;
    transition: 0.5s;
}

.chevron-label {
    @apply flex flex-col;
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
}

.mask {
    width: 100%;
    height: calc(100vh - 60px);
    position: absolute;
    z-index: 2;
    background-color: black;
    opacity: 0.5;
}

@media(max-width:1400px) {

}

@media(max-width:768px) {
    .all {
        @apply px-[20px] justify-between;
    }

    .logo {
        width: 86px;
        height: 32px;
        margin: 0;
    }

    .menu {
        @apply m-0 justify-between;
    }
    .menu ul{
        @apply w-[60%] justify-between;
    }
    .menu ul li {
        font-size: 14px;
        margin: 0px;
    }

    .ham {
        @apply w-[180px] h-[80vh] text-[16px] pl-[10px] right-[-200px];
    }

    .ham .sub-dropdown-menu {
        @apply text-[12px];
    }

    .chevron-switch:checked+label .sub-dropdown-menu {
        @apply h-[120px];
    }

    .chevron-switch:checked+label .sub-2 {
        @apply h-[200px];
    }

    .ham label {
        @apply ml-[-10px];
    }

    .fa-solid {
        @apply text-[10px];
    }
}

@media(max-width:500px) {
    .ham{
        @apply w-[100%] h-auto text-[18px] right-0  text-white flex flex-col items-center gap-[20px] py-[20px] z-[3] rounded-bl-[0px];
        top:-161px;
    }
    .active {
    transform: translate(0, 221px);
}
    .logo {
        @apply hidden;
    }

    .small-logo {
        width: 28px;
        height: 30px;
        display: block;
        margin: auto;
        transform: translate(50%, 0%);
    }
    .list li{
        @apply border-b-[1px] border-[white];
    }
    .menu ul {
        display: none;
    }
}
</style>
