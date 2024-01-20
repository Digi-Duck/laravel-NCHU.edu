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
    methods: {
        check() {
            const ease = document.querySelector('.ham');
            ease.classList.toggle('active');
            this.flag = !this.flag;
        }
    }
};
</script>

<template>
    <nav class="fixed w-[100%] z-[3] top-0">
        <div class="w-[100%] h-[60px] bg-white flex items-center justify-between px-10 relative">
            <img class="logo" :src="images.logo" alt="">
            <div class="menu flex items-center">
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
                        <Link href="">最新消息</Link>
                    </li>
                    <li>
                        <Link href="">聯絡我們</Link>
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
                    <li>
                        <span>關於我們</span> &nbsp
                        <i class="fa-solid fa-chevron-down text-[14px]"></i>
                        <i class="fa-solid fa-chevron-up hidden text-[14px]"></i>
                    </li>
                    <ul class="sub-dropdown-menu ml-[1px] h-[180px]">
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
                    <li>
                        <span>課程資訊</span> &nbsp
                        <i class="fa-solid fa-chevron-down text-[14px]"></i>
                        <i class="fa-solid fa-chevron-up hidden text-[14px]"></i>
                    </li>
                    <ul class="sub-dropdown-menu  ml-[1px]">
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
                    <li>
                        <span>消息資訊</span> &nbsp
                        <i class="fa-solid fa-chevron-down text-[14px]"></i>
                        <i class="fa-solid fa-chevron-up hidden text-[14px]"></i>
                    </li>
                    <ul class="sub-dropdown-menu  ml-[1px]">
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

@media(max-width:850px) {
    .logo {
        width: 86px;
        height: 32px;
        margin-right: 55px;
    }

    .menu ul li {
        font-size: 14px;
        margin-right: 55px;
    }
}

@media(max-width:650px) {
    .logo {
        width: 24px;
        height: 26px;
        margin-right: 55px;
    }

    .menu ul li {
        font-size: 14px;
        margin-right: 55px;
    }
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

.ham {
    @apply w-[11%] text-[18px] bg-[#0057FF] absolute top-[60px] right-[-11%] text-white flex flex-col items-center gap-[20px] pt-[20px] z-[3] rounded-bl-[300px];
    transition: 1s;
    height: calc(100vh - 60px);
}

.ham .sub-dropdown-menu {
    @apply text-[14px] py-[10px];
}

.ham .sub-dropdown-menu li {
    @apply mb-[10px];
}


.chevron-switch:checked+label li i:nth-of-type(1) {
    display: none;
}

.chevron-switch:checked+label li i:nth-of-type(2) {
    display: inline-block;
}

.chevron-switch:not(:checked)+label .sub-dropdown-menu {
    display: none;

}

.chevron-label {
    @apply flex flex-col;
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
</style>
