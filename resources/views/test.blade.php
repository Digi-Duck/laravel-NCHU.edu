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
            background-image: url('{{ asset('image/logo/logo.svg') }}');
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
    </style>
</head>

<body>
    <nav class="nav-bar w-[100vw] h-[60px] bg-white flex items-center justify-between px-[40px] fixed">
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
        <Navbar />
    </nav>

    <header></header>
    <main></main>
    <footer></footer>
</body>
<script scoped lang="scss"></script>

</html>
