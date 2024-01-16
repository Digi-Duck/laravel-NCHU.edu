<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
</head>
<style scoped>
    .nav-bar {
        box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.1);
    }
</style>

<body>
    <div id="app">
        <nav class="nav-bar w-[100vw] h-[60px] bg-white flex items-center justify-between px-[40px] fixed">
            <Navbar />
        </nav>
        <banner />
    </div>
</body>

</html>
