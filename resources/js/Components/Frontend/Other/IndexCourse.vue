<script>
export default {
    data() {
        return {
            cards: [
                { title: '一般專案經理證照培訓班', tag1: '新手', tag2: '培訓班', tag3: '專案管理', tag4: 'APMA證照', transform: 'translateY(0%)', color: '#21d2db', },
                { title: '一般專案經理證照培訓班', tag1: '新手', tag2: '培訓班', tag3: '專案管理', tag4: 'APMA證照', transform: 'translateY(0%)', color: '#ffcc00', },
                { title: '一般專案經理證照培訓班', tag1: '新手', tag2: '培訓班', tag3: '專案管理', tag4: 'APMA證照', transform: 'translateY(0%)', color: '#db5621', },
                { title: '一般專案經理證照培訓班', tag1: '新手', tag2: '培訓班', tag3: '專案管理', tag4: 'APMA證照', transform: 'translateY(0%)', color: '#7dbda8', },
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
            this.topNoteIndex = 3;
            this.cards.forEach((card, index) => {
                setTimeout(() => {
                    this.cards[index] = { ...card, transform: 'translateY(0%)' };
                }, index * 250);
            });
        },

    }
}
</script>
<template>
    <div class="flex justify-center items-center ">
        <section class="w-[85%] h-[100vh] flex justify-center items-center   overflow-hidden">
            <div @wheel.prevent="handleMouseWheel" @mouseleave="resetCards" class="w-[60%] h-[72%]">
                <div class="cards h-[72%] relative ">
                    <div v-for="card in cards" :key="card.id" class="card"
                        :style="{ transform: card.transform, backgroundColor: card.color, opacity: card.opacity }">
                        <div class="card flex flex-col justify-end">
                            <div class="card-title">{{ card.title }}</div>
                            <div class="card-tags flex">
                                <div v-for="tag in [card.tag1, card.tag2, card.tag3, card.tag4]" :key="tag.id"
                                    class="card-tag">{{ tag }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-[40%] h-[72%] bg-blue-300">
                <div class="mt-[-15%]  w-[100%] h-[40%] bg-yellow-300 ">
                    <div class="provide w-[100%] h-[100%] ">
                        <div class="w-[100%] pl-[21%]  arrow tracking-[-3px] "><span class="mr-[20px]">Latest</span>最新</div>
                        <div class="w-[100%]  pl-[31%] mt-[-10%] flex gap-[15px] tracking-[-3px] row ">課程<span
                                class="mt-[15px] tracking-[-3px]">course</span>
                        </div>
                    </div>
                </div>
                <div class="w-[100%] h-[60%] mt-[15%] flex flex-col justify-end bg-red-200">
                    <div class="w-[100%] h-[40%] title pl-[15%]  bg-green-500 mb-[1px]">一般專案經理證照培訓班</div>
                    <div class="w-[100%] h-[60%] intro pl-[15%] bg-green-500 mb-[1px]">
                        專案經理是現在團隊中不可或缺的角色，擁有專業的證照能夠提升個人競爭力並開啟更廣況的職業發展道路。
                    </div>
                    <div class="w-[100%]  flex justify-end bg-green-500 more"><a href="">了解更多 → </a></div>
                </div>

            </div>
        </section>
    </div>
</template>
<style scoped>
.card {
    @apply w-[95%] h-[100%] p-[30px] absolute cursor-pointer border-dotted;
    transition: 0.5s ease-in-out;
    transform-origin: bottom center;
}

.card:nth-child(1) {
    top: 0;
    left: 0;
    /* background-color: #21d2db; */
}

.card:nth-child(2) {
    top: 13%;
    left: 0px;
    /* background-color: #ffcc00; */
}

.card:nth-child(3) {
    top: 26%;
    left: 0px;
    /* background-color: #db5621 */
}

.card:nth-child(4) {
    top: 39%;
    /* background-color: #7dbda8; */

}

.card-title {
    @apply text-[#ffffff] text-[38px] font-bold;
    font-family: 'Noto Sans TC', sans-serif;
}

.card-tag {
    @apply bg-[#ffffff] text-[19px] mr-[10px] rounded-full px-[20px] py-[8px] font-bold mt-[15px];
    font-family: 'Inter', sans-serif;
}

.provide {
    font-family: 'Noto Sans TC', sans-serif;
    font-weight: 700;
    font-size: 95px;
}

.provide span {
    font-family: 'Inter', sans-serif;
    font-weight: 700;
    font-size: 50px;
}

.row {
    position: relative;
}

.row:after {
    content: "";
    position: absolute;
    top: 58%;
    left: 78%;
    width: 120px;
    height: 110px;
    background-image: url('/images/banner/blue-row.png');
    background-repeat: no-repeat;
    background-position-x: right;
    background-size: 85px 85px;
    rotate: 90deg;
}

.title {
    @apply text-[72px] text-[#0054ff] font-black;
    font-family: 'Noto Sans TC', sans-serif;
    line-height: 1.1
}

.intro {
    @apply text-[20px] font-bold;
    line-height: 1.6;
    font-family: 'Noto Sans TC', sans-serif;
}

.more {
    @apply text-[20px] font-extrabold;
    font-family: 'Inter', sans-serif;
}
</style>


