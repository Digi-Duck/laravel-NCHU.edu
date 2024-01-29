<!-- 前台首頁 -->

<script>
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import IndexBanner from '@/Components/Frontend/Other/IndexBanner.vue';
import IndexMain from '@/Components/Frontend/Other/IndexMain.vue';
import IndexTrans from '@/Components/Frontend/Other/IndexTrans.vue';
import IndexCourse from '@/Components/Frontend/Other/IndexCourse.vue';
import IndexNews from '@/Components/Frontend/Other/IndexNews.vue';
import IndexContact from '@/Components/Frontend/Other/IndexContact.vue';

export default {
    props: { response: Array },
    components: {
        FrontendLayout,
        IndexBanner,
        IndexCourse,
        IndexMain,
        IndexNews,
        IndexContact,
        IndexTrans,
    },
    data() {
        return {
            
        };
    },
    methods: {

    },
};
</script>

<template>
    <FrontendLayout>
        <div>
            <IndexBanner />
        </div>
        <div>
            <IndexMain :res-type="response" />
        </div>
        <div>
            <IndexTrans />
        </div>

        <div>
            <IndexCourse />
        </div>
        <div>
            <IndexNews />
        </div>
        <div>
            <IndexContact />
        </div>
    </FrontendLayout>
</template>

<style scoped></style>
