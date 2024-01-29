<script>
import trans from '/images/main/trans.svg';

export default {
    data() {
        return {
            images: {
                trans,
            },
        }
    },
}
</script>
<template>
    <main class="w-[100%] h-[100vh] bg-[#0057ff] flex flex-col items-center justify-center relative">
        <i class="fa-solid fa-arrow-up text-[72px] text-white absolute top-[60px]"></i>
        <img :src="images.trans" alt="transitionLogo" class="h-[250px]">
    </main>
</template>
<style scoped></style>
