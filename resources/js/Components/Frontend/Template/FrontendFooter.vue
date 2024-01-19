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
  <footer class="w-[64%] m-auto">
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
          <div class="content flex justify-end">
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
              <div>
                <Link class="h3" href="">相關法規</Link>
              </div>
              <div>
                <Link class="h3" href="">成果展示</Link>
              </div>
            </div>
            <div class="content-3">
              <div class="h2">課程資訊</div>
              <div>
                <Link class="h3" href="">兒童營隊</Link>
              </div>
              <div>
                <Link class="h3" href="">單元手作</Link>
              </div>
              <div>
                <Link class="h3" href="">運動課程</Link>
              </div>
              <div>
                <Link class="h3" href="">專業訓練</Link>
              </div>
              <div>
                <Link class="h3" href="">專業證照</Link>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bottom flex justify-between ">
        <div class="h4">©2024 International College of Innovation and Industry Liaison, N.C.H.U. </div>
        <div class="flex gap-1">
          <div>
            <Link class="h4" href="">隱私權聲明 </Link>|
          </div>
          <div>
            <Link class="h4" href="">智慧財產權聲明 </Link>|
          </div>
          <div>
            <Link class="h4" href="">網站導覽 </Link>|
          </div>
          <div>
            <Link class="h4" href="">網站意見回饋</Link>
          </div>
        </div>
      </div>
    </div>
  </footer>
</template>

<style scoped>
.main {
  width: 100%;
  display: flex;
  align-items: center;
  flex-direction: column;
}

.top {
  height: 70%;
  width: 100%;
  margin-top: 5%;
  display: flex;
}

.top-left {
  width: 50%;
  height: 100%;
}

.logo {
  width: 294px;
  height: 110px;
  margin-bottom: 15%;
}

.word {
  width: 671px;
  height: 151px;
}

.h1 {
  /* font-size: 22px; */
  font-size: 13px;
  margin-bottom: 10px;
  font-weight: bold;

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
  margin-bottom: 23px;
  /* font-size: 30px; */
  font-size: 18px;
  font-weight: bold;
}

.h3 {
  margin-top: 13px;
  /* font-size: 25px; */
  font-size: 15px;
}

.h4 {
  font-weight: bold;
  line-height: 27px;
  /* font-size: 20px; */
  font-size: 12px;
}

.content-3 {
  display: flex;
  flex-direction: column;
  align-items: center;
  height: 100%;
  margin-left: 5%;
  gap: 5%;
}

.bottom {
  width: 100%;
  height: 27px;
  margin-bottom: 5%;
}
</style>
