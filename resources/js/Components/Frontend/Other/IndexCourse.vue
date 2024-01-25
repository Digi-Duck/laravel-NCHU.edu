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
    <div class="flex justify-center items-center ">
        <section class=" w-[1294px] h-[100vh] flex justify-center items-center  overflow-hidden" @mouseleave="resetCards">
            <div class="w-[776px] h-[650px]">
                <div class="cards h-[468px] relative" @wheel.prevent="handleMouseWheel">
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
            <div class="w-[517px] h-[650px] ">
                <div class="mt-[-65px]  w-[517px] h-[260px]  ">
                    <div class="provide w-[517px] h-[260px] ">
                        <div class="w-[517px] pl-[108px]  arrow tracking-[-3px] "><span class="mr-[20px]">Latest</span>最新
                        </div>
                        <div class=" w-[517px]  pl-[160.27px] mt-[-52px] flex gap-[15px] tracking-[-3px] row ">課程<span
                                class="mt-[15px] tracking-[-3px]">course</span>
                        </div>
                    </div>
                </div>
                <div class="w-[517px] h-[390px] mt-[51.7px] relative flex flex-col justify-end ">
                    <transition name="slide-down">
                        <div v-if="topCardIndex === 0" class="trans-title w-[517px]  h-[156px] title pl-[77.5px]  mb-[1px]">
                            {{ cards[0].title }}</div>
                        <div v-else-if="topCardIndex === 1" class="trans-title w-[517px]  h-[156px] title pl-[77.5px]  mb-[1px]">
                            {{ cards[1].title }}</div>
                        <div v-else-if="topCardIndex === 2" class="trans-title w-[517px]  h-[156px] title pl-[77.5px]  mb-[1px]">
                            {{ cards[2].title }}</div>
                        <div v-else-if="topCardIndex === 3" class="trans-title w-[517px]  h-[156px] title pl-[77.5px]  mb-[1px] ">
                            {{ cards[3].title }}</div>
                    </transition>
                    <transition name="slide-down-content">
                        <div v-if="topCardIndex === 0"
                            class="trans-content w-[517px] h-[167px] intro pl-[77.5px] pt-[20.6px] mb-[1px]">{{ cards[0].text }}</div>
                        <div v-else-if="topCardIndex === 1"
                            class="trans-content w-[517px] h-[167px] intro pl-[77.5px] pt-[20.6px] mb-[1px]">{{ cards[1].text }}</div>
                        <div v-else-if="topCardIndex === 2"
                            class="trans-content w-[517px] h-[167px] intro pl-[77.5px] pt-[20.6px] mb-[1px]">{{ cards[2].text }}</div>
                        <div v-else-if="topCardIndex === 3"
                            class="trans-content w-[517px] h-[167px] intro pl-[77.5px] pt-[20.6px] mb-[1px] ">{{ cards[3].text }}
                        </div>
                    </transition>
                    <transition name="slide-down-more">
                        <div v-if="topCardIndex === 0" class="trans-more w-[517px] flex justify-end more "><a
                                :href="cards[0].link">了解更多<i class="fa-solid fa-arrow-right"></i>
                            </a></div>
                        <div v-else-if="topCardIndex === 1" class="trans-more w-[517px] flex justify-end more "><a
                                :href="cards[1].link">了解更多<i class="fa-solid fa-arrow-right"></i> </a></div>
                        <div v-else-if="topCardIndex === 2" class="trans-more w-[517px] flex justify-end more "><a
                                :href="cards[2].link">了解更多 <i class="fa-solid fa-arrow-right"></i> </a></div>
                        <div v-else-if="topCardIndex === 3" class="trans-more w-[517px] flex justify-end more "><a
                                :href="cards[3].link">了解更多 <i class="fa-solid fa-arrow-right"></i> </a></div>
                    </transition>
                </div>

            </div>
        </section>
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
    top: 39px;
}

.trans-content {
    top: 202.8px;
}

.trans-more {
    top: 358.8px;
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
    transform: translateY(-50px);
}

.slide-down-leave-to {
    opacity: 0;
    transform: translateY(30px);
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
    transform: translateY(-40px);
}

.slide-down-content-leave-to {
    opacity: 0;
    transform: translateY(30px);
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
    transform: translateY(-40px);
}

.slide-down-more-leave-to {
    opacity: 0;
    transform: translateY(30px);
}



/* Card Styles */
.card {

    @apply w-[737px] h-[468px] p-[30px] absolute cursor-pointer border-dotted;
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
    top: 60.84px;
    left: 0;
    /* background-color: #ffcc00; */
}

.card:nth-child(3) {
    top: 121.68px;
    left: 0;
    /* background-color: #db5621 */
}

.card:nth-child(4) {
    top: 182.52px;
    /* background-color: #7dbda8; */
}

/* Card Content Styles */
.card-title {
    @apply text-[#ffffff] text-[38px] font-bold;
    font-family: 'Noto Sans TC', sans-serif;
}

.card-tag {
    @apply bg-[#ffffff] text-[19px] mr-[10px] rounded-full px-[20px] py-[8px] font-bold mt-[15px];
    font-family: 'Inter', sans-serif;
}

.card-type {
    @apply w-[139.6px] py-[7.76px] text-[19px] mb-[15.52px] text-white border-white border-2 border-solid rounded-full font-semibold flex justify-center items-center;
    font-family: 'Inter', sans-serif;
}

/* Provide Styles */
.provide {
    @apply text-[95px] font-bold;
    font-family: 'Noto Sans TC', sans-serif;
}

.provide span {
    @apply text-[50px] font-bold;
    font-family: 'Inter', sans-serif;
}

/* Row Styles */
.row {
    position: relative;
}

.row:after {
    @apply absolute top-[80.8px] left-[410px] w-[120px] h-[110px] bg-no-repeat bg-right bg-[length:85px_85px] rotate-90;
    content: "";
    background-image: url('/images/banner/blue-row.png');
}

/* Title Styles */
.title {
    @apply text-[72px] text-[#0054ff] font-black;
    font-family: 'Noto Sans TC', sans-serif;
    line-height: 1.1;
}

/* Introduction Styles */
.intro {
    @apply text-[20px] font-bold;
    line-height: 1.6;
    font-family: 'Noto Sans TC', sans-serif;
}

/* More Styles */
.more {
    @apply text-[20px] font-extrabold text-[#0057ff];
    font-family: 'Inter', sans-serif;
}
</style>


