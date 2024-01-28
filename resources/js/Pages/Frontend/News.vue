<script>
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import BannerLayout from '@/Layouts/BannerLayout.vue';
import News from '@/Components/Frontend/Other/NewsPage.vue';

export default {
    components: {
        FrontendLayout,
        BannerLayout,
        News,
    },
    data() {

    }
}
</script>
<template>
    <FrontendLayout>
        <BannerLayout>
            <div>
                <News />
            </div>
        </BannerLayout>
    </FrontendLayout>
</template>
