<script>
export default {
    data() {
        return {
            cards: [
                { title: '一般專案經理證照培訓班', type: '專業證照', tag1: '新手', tag2: '培訓班', tag3: '專案管理', tag4: 'APMA證照', color: '#21d2db', text: '專案經理是現在團隊中不可或缺的角色，擁有專業的證照能夠提升個人競爭力並開啟更廣況的職業發展道路。', link: 1 },
                { title: '一般專案經理證照培訓班', type: '專業證照', tag1: '新手', tag2: '培訓班', tag3: '專案管理', tag4: 'APMA證照', color: '#ffcc00', text: '專案經理是現在團隊中不可或缺的角色，擁有專業的證照能夠提升個人競爭力並開啟更廣況的職業發展道路。', link: 2 },
                { title: '一般專案經理證照培訓班', type: '專業證照', tag1: '新手', tag2: '培訓班', tag3: '專案管理', tag4: 'APMA證照', color: '#db5621', text: '專案經理是現在團隊中不可或缺的角色，擁有專業的證照能夠提升個人競爭力並開啟更廣況的職業發展道路。', link: 3 },
                { title: '一般專案經理證照培訓班', type: '專業證照', tag1: '新手', tag2: '培訓班', tag3: '專案管理', tag4: 'APMA證照', color: '#7dbda8', text: '專案經理是現在團隊中不可或缺的角色，擁有專業的證照能夠提升個人競爭力並開啟更廣況的職業發展道路。', link: 4 },
            ],
            topCardIndex: 3,
        }
    },
    methods: {
        handleMouseWheel(event) {
            const deltaY = event.deltaY;
            const direction = deltaY > 0 ? 'down' : 'up';

            if (direction === 'down') {
                if (this.topCardIndex > 0 && this.topCardIndex < this.cards.length) {
                    this.cards[this.topCardIndex] = { ...this.cards[this.topCardIndex], transform: 'translateY(93%)', };
                    this.topCardIndex--;
                }
            } else if (direction === 'up') {
                if (this.topCardIndex < this.cards.length - 1) {
                    this.topCardIndex++;
                    this.cards[this.topCardIndex] = { ...this.cards[this.topCardIndex], transform: 'translateY(0%)', };
                }
            }
        },
        resetCards() {
            this.cards.forEach((card, index) => {
                setTimeout(() => {
                    this.cards[index] = { ...card, transform: 'translateY(0%)' };
                }, index * 100);
            });
            this.topCardIndex = 3;

        },

    }
}
</script>
<template>
    <div class="w-[90%] md:w-[80%] m-auto">
        <div class="flex justify-center items-center mb-[5%]">
            <section class=" w-[67.39vw] py-[3%] flex justify-center items-center  overflow-hidden"
                @mouseleave="resetCards">
                <div class="w-[40.41vw] h-[33.85vw]">
                    <div class="cards h-[24.37vw] relative" @wheel.prevent="handleMouseWheel">
                        <div v-for="card in cards" :key="card.id" class="card"
                            :style="{ transform: card.transform, backgroundColor: card.color, opacity: card.opacity }">
                            <a :href="card.link">
                                <div class="card flex flex-col justify-end">
                                    <div class="card-type">{{ card.type }}</div>
                                    <div class="card-title">{{ card.title }}</div>
                                    <div class="card-tags flex">
                                        <div v-for="tag in [card.tag1, card.tag2, card.tag3, card.tag4]" :key="tag.id"
                                            class="card-tag">{{ tag }}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-[27.7vw] h-[34.59] ">
                    <div class="mt-[-3.47vw]  w-[27.7vw] h-[13.84vw]  ">
                        <div class="provide w-[27.7vw] h-[13.84vw] ">
                            <div class="w-[27.7vw] pl-[5.76vw]  arrow tracking-[-3px] "><span
                                    class="mr-[1.07vw]">Latest</span>最新
                            </div>
                            <div class=" w-[27.7vw]  pl-[8.54vw] mt-[-2.78vw] flex gap-[0.81vw] tracking-[-3px] row ">
                                課程<span class="mt-[0.81vw] tracking-[-3px]">course</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-[26.92vw] h-[20.31vw] mt-[2.69vw] relative flex flex-col justify-end ">
                        <transition name="slide-down">
                            <div v-if="topCardIndex === 0"
                                class="trans-title w-[27.79vw]  h-[8.38vw] title pl-[4.16vw]  mb-[0.053vw]">
                                {{ cards[0].title }}</div>
                            <div v-else-if="topCardIndex === 1"
                                class="trans-title w-[27.79vw]  h-[8.38vw] title pl-[4.16vw]  mb-[0.053vw]">
                                {{ cards[1].title }}</div>
                            <div v-else-if="topCardIndex === 2"
                                class="trans-title w-[27.79vw]  h-[8.38vw] title pl-[4.16vw]  mb-[0.053vw]">
                                {{ cards[2].title }}</div>
                            <div v-else-if="topCardIndex === 3"
                                class="trans-title w-[27.79vw]  h-[8.38vw] title pl-[4.16vw]  mb-[0.053vw] ">
                                {{ cards[3].title }}</div>
                        </transition>
                        <transition name="slide-down-content">
                            <div v-if="topCardIndex === 0"
                                class="trans-content w-[27.79vw] h-[8.97vw] intro pl-[4.16vw] pt-[1.107vw] mb-[0.053vw]">{{
                                    cards[0].text }}</div>
                            <div v-else-if="topCardIndex === 1"
                                class="trans-content w-[27.79vw] h-[8.97vw] intro pl-[4.16vw] pt-[1.107vw] mb-[0.053vw]">{{
                                    cards[1].text }}</div>
                            <div v-else-if="topCardIndex === 2"
                                class="trans-content w-[27.79vw] h-[8.97vw] intro pl-[4.16vw] pt-[1.107vw] mb-[0.053vw]">{{
                                    cards[2].text }}</div>
                            <div v-else-if="topCardIndex === 3"
                                class="trans-content w-[27.79vw] h-[8.97vw] intro pl-[4.16vw] pt-[1.107vw] mb-[0.053vw] ">{{
                                    cards[3].text }}
                            </div>
                        </transition>
                        <transition name="slide-down-more">
                            <div v-if="topCardIndex === 0" class="trans-more w-[26.9vw]  flex justify-end more "><a
                                    :href="cards[0].link">了解更多<i class="fa-solid fa-arrow-right"></i>
                                </a></div>
                            <div v-else-if="topCardIndex === 1" class="trans-more w-[26.9vw] flex justify-end more "><a
                                    :href="cards[1].link">了解更多<i class="fa-solid fa-arrow-right"></i> </a></div>
                            <div v-else-if="topCardIndex === 2" class="trans-more w-[26.9vw] flex justify-end more "><a
                                    :href="cards[2].link">了解更多 <i class="fa-solid fa-arrow-right"></i> </a></div>
                            <div v-else-if="topCardIndex === 3" class="trans-more w-[26.9vw] flex justify-end more "><a
                                    :href="cards[3].link">了解更多 <i class="fa-solid fa-arrow-right"></i> </a></div>
                        </transition>
                    </div>

                </div>
            </section>
        </div>
    </div>
</template>
<style scoped>
/* transition */

.trans-content,
.trans-title,
.trans-more {
    @apply absolute;
}

.trans-title {
    top: 2.03vw;
}

.trans-content {
    top: 10.56vw;
}

.trans-more {
    top: 18.68vw;
}

/* transition-title */
.slide-down-enter-active {
    transition: 0.5s ease-in;
}

.slide-down-leave-active {
    transition: 0.2s ease-out;
}

.slide-down-enter-from {
    opacity: 0;
    transform: translateY(-2.6vw);
}

.slide-down-leave-to {
    opacity: 0;
    transform: translateY(1.56vw);
}

/* transition-content */
.slide-down-content-enter-active {
    transition: 0.5s ease-in;
}

.slide-down-content-leave-active {
    transition: 0.2s ease-out;
}

.slide-down-content-enter-from {
    opacity: 0;
    transform: translateY(-2.08vw);
}

.slide-down-content-leave-to {
    opacity: 0;
    transform: translateY(1.56vw);
}

/* transition-moreLink*/
.slide-down-more-enter-active {
    transition: 0.5s ease-in;
}

.slide-down-more-leave-active {
    transition: 0.2s ease-out;
}

.slide-down-more-enter-from {
    opacity: 0;
    transform: translateY(-2.08vw);
}

.slide-down-more-leave-to {
    opacity: 0;
    transform: translateY(1.56vw);
}



/* Card Styles */
.card {

    @apply w-[38.38vw] h-[24.37vw] p-[1.56vw] absolute cursor-pointer border-dotted;
    transition: 0.5s ease-in-out;
    transform-origin: bottom center;
    will-change: transform;
}

.card:nth-child(1) {
    top: 0;
    left: 0;
    /* background-color: #21d2db; */
}

.card:nth-child(2) {
    top: 3.125vw;
    left: 0;
    /* background-color: #ffcc00; */
}

.card:nth-child(3) {
    top: 6.33vw;
    left: 0;
    /* background-color: #db5621 */
}

.card:nth-child(4) {
    top: 9.5vw;
    /* background-color: #7dbda8; */
}

/* Card Content Styles */
.card-title {
    @apply text-[#ffffff] text-[1.97vw] font-bold;
    font-family: 'Noto Sans TC', sans-serif;
}

.card-tag {
    @apply bg-[#ffffff] text-[0.98vw] mr-[0.52vw] rounded-full px-[1.04vw] py-[0.41vw] font-bold mt-[0.78vw];
    font-family: 'Inter', sans-serif;
}

.card-type {
    @apply w-[7.11vw] py-[0.40vw] text-[0.98vw] mb-[0.82vw] text-white border-white border-2 border-solid rounded-full font-semibold flex justify-center items-center;
    font-family: 'Inter', sans-serif;
}

/* Provide Styles */
.provide {
    @apply text-[4.94vw] font-bold;
    font-family: 'Noto Sans TC', sans-serif;
}

.provide span {
    @apply text-[2.6vw] font-bold;
    font-family: 'Inter', sans-serif;
}

/* Row Styles */
.row {
    position: relative;
}

.row:after {
    @apply absolute top-[4.34vw] left-[22.04vw] w-[6.45vw] h-[5.9vw] bg-no-repeat bg-right bg-[length:4.56vw_4.56vw] rotate-90;
    content: "";
    background-image: url('/images/banner/blue-row.png');
}

/* Title Styles */
.title {
    @apply text-[3.75vw] text-[#0054ff] font-black;
    font-family: 'Noto Sans TC', sans-serif;
    line-height: 1.1;
}

/* Introduction Styles */
.intro {
    @apply text-[1.04vw] font-bold;
    line-height: 1.6;
    font-family: 'Noto Sans TC', sans-serif;
}

/* More Styles */
.more {
    @apply text-[1.04vw] font-extrabold text-[#0057ff];
    font-family: 'Inter', sans-serif;
}</style>


