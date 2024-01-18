<!-- 前台頁尾組件 -->

<script>
import logo from '/images/logo/logo.svg';

export default {
  data() {
    return {
      images: {
        logo,
      },
    };
  },
};
</script>

<template>
  <footer class="w-[80%] m-auto">
    <div class="main">
      <div class="top">
        <div class="top-left">
          <div class="logo">
            <img class="w-[100%]" :src="images.logo" alt="中興大學推廣組Logo">
          </div>
          <div class="word">
            <pre class="h1">電話  04 2284 0455</pre>
            <pre class="h1">信箱  hello20131005@gmail.com</pre>
            <pre class="h1">地址  40227台中市南區興大路145號(綜合教學大樓8樓804、805室)</pre>
            <pre class="h1">網站製作  王亞筑 陳喬旭 蘇煒峻 林聖翰 陳瑋祥</pre>
          </div>
        </div>
        <div class="top-right">
          <div class="content flex">
            <div class="content-3">
              <div class="h2">消息資訊</div>
              <div>
                <Link class="h3" href="">最新消息</Link>
              </div>
              <div>
                <Link class="h3" href="">最新課程</Link>
              </div>
            </div>
            <div class="content-3">
              <div class="h2">消息資訊</div>
              <div>
                <Link class="h3" href="">單位介紹</Link>
              </div>
              <div>
                <Link class="h3" href="">成員介紹</Link>
              </div>
            </div>
            <div class="content-3">
              <div class="h2">課程資訊</div>
              <div>
                <Link class="h3" href="">所有課程</Link>
              </div>
              <div>
                <Link class="h3" href="">小時學堂</Link>
              </div>
              <div>
                <Link class="h3" href="">學齡前課程</Link>
              </div>
              <div>
                <Link class="h3" href="">小貓頭鷹冬夏令營</Link>
              </div>
              <div>
                <Link class="h3" href="">Looking for 運動咖</Link>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bottom flex justify-between ">
        <pre class="h4">©2024 International College of Innovation and Industry Liaison, N.C.H.U. </pre>
        <div class="flex">
          <pre>
            <Link class="h4" href=""> 隱私權聲明 |</Link>
          </pre>
          <pre>
            <Link class="h4" href=""> 智慧財產權聲明 |</Link>
          </pre>
          <pre>
            <Link class="h4" href=""> 網站導覽 |</Link>
          </pre>
          <pre>
            <Link class="h4" href=""> 網站意見回饋 </Link>
          </pre>
        </div>
      </div>
    </div>
  </footer>
</template>

<style scoped>
.main {
  width: 100%;
  margin: auto;
  display: flex;
  align-items: center;
  flex-direction: column;
}

.top {
  height: 468px;
  width: 100%;
  margin-top: 1%;
  display: flex;
}

.top-left {
  width: 50%;
  height: 100%;
}

.logo {
  width: 490px;
  height: 183px;
  margin-bottom: 60px;
}

.word {
  width: 671px;
  height: 151px;
}

.h1 {
  font-size: 22px;
  margin-bottom: 10px;
  font-family: 'Inter', sans-serif;
  font-weight: 600;
}

.top-right {
  width: 50%;
  height: 100%;
}

.content {
  width: 100%;
  height: 300px;
}

.h2 {
  font-family: 'Noto Sans TC', sans-serif;
  margin-bottom: 23px;
  font-size: 30px;
  font-weight: 700;
}

.h3 {
  margin-top: 13px;
  font-size: 25px;
  font-family: 'Noto Sans TC', sans-serif;
}

.h4 {
  font-weight: bold;
  line-height: 27px;
  font-size: 20px;
}

.content-3 {
  width: 33%;
  height: 100%;
}

.bottom {
  width: 100%;
  height: 27px;
}
</style>
