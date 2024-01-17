<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>中興大學推廣教育</title>
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
</head>
<style scoped>
    .nav-bar {
        box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.1);
    }

    .background {
        background-image: url('/images/body/grid.svg');
    }
</style>

<body>
    <div id="app" class="w-[100%] background">
        <nav class="nav-bar h-[60px] bg-white flex items-center justify-between px-[40px]">
            <Navbar />
        </nav>
        <header class="h-[100vh] m-auto w-[80%] mt-[37px] ">
            <banner />
        </header>
        <main class="m-auto w-[80%] h-[100vh]"></main>
        <footer class="m-auto w-[80%]">
            <foot />
        </footer>
    </div>
</body>

</html>
