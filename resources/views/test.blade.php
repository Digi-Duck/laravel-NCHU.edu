<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>中興大學推廣教育組</title>
    <style scoped>
        .nav-bar {
            box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.1);
        }

        .logo {
            background-image: url('/images/logo/logo.svg');
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

        .ham-menu .line-1 {
            top: 5.5px;
        }

        .ham-menu .line-2 {
            top: 11.5px;
        }

        .ham-menu .line-3 {
            top: 17.5px;
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

        .provide {
            font-family: 'Noto Sans TC', sans-serif;
            font-weight: 700;
            font-size: 95px
        }

        .provide span {
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            font-size: 50px
        }

        main ul {
            font-family: 'Inter', sans-serif;
            font-size: 22px
        }

        main ul li {
            font-family: 'Inter', sans-serif;
            font-weight: 800;
            font-size: 22px
        }

        main ul li:hover {
            color: #0057FF;
        }
        .arrow{
            position: relative;
        }
        .arrow::after{
            content: '';
            position: absolute;
            width: 88px;
            height: 88px;
            background-image: url('/images/banner/blue-row.png');
            background-size: contain;
            transform: rotate(90deg);
            bottom: -124px;
            right: 50px;
        }
    </style>
</head>

<body>
    <nav class="nav-bar w-[100%] h-[60px] bg-white flex items-center justify-between px-[40px]">
        {{-- <div class="logo"></div>
        <div class="menu">
            <ul class="flex">
                <li><a href="">最新消息</a></li>
                <li><a href="">最新課程</a></li>
                <li><a href="">課程總覽</a></li>
                <li><a href="">關於我們</a></li>
                <div class="fun-menu ">
                    <input id="ham-menu-switch" type="checkbox" hidden>
                    <label for="ham-menu-switch" class="ham-menu">
                        <div class="line line-1"></div>
                        <div class="line line-2"></div>
                        <div class="line line-3"></div>
                    </label>
                </div>
            </ul>
        </div> --}}
        {{-- <Navbar /> --}}
    </nav>
    <header></header>
    <main class="w-[80%] m-auto">
        <div class="flex justify-center items-center pt-[63px] pb-[105px]">
            <div class="provide w-[503px] h-[252px]">
                <div class="w-[100%] mt-[-15px] ms-[50px] arrow">我們<span> We</span></div>
                <div class="w-[100%] mt-[-40px] flex gap-[15px]"><span class="mt-[15px]">provide </span>提供</div>
            </div>
            <ul class="w-[748px] flex items-center justify-between">
                <li><a href="">01兒童營隊</a></li>|
                <li><a href="">02單元手作</a></li>|
                <li><a href="">03運動課程</a></li>|
                <li><a href="">04職業訓練</a></li>|
                <li><a href="">05專業證照</a></li>
            </ul>
        </div>
        <div>
            <ul class="w-[1219px]">
                <li><a href="">
                        <div></div>
                        <div></div>
                    </a></li>
                <li><a href="">
                        <div></div>
                        <div></div>
                    </a></li>
                <li><a href="">
                        <div></div>
                        <div></div>
                    </a></li>
                <li><a href="">
                        <div></div>
                        <div></div>
                    </a></li>
                <li><a href="">
                        <div></div>
                        <div></div>
                    </a></li>
            </ul>
        </div>
    </main>
    <footer></footer>
</body>
<script scoped lang="scss"></script>

</html>
