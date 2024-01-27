<script>
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import BannerLayout from '@/Layouts/BannerLayout.vue';
import CoursePage from '@/Components/Frontend/Other/CoursePage.vue';

export default {
    props: {
        courses: Array
    },
    components: {
        FrontendLayout,
        BannerLayout,
        CoursePage
    },
    data() {

    }
}
</script>
<template>
    <FrontendLayout>
        <BannerLayout>
            <div>
                <CoursePage />
            </div>
        </BannerLayout>
    </FrontendLayout>
</template>
