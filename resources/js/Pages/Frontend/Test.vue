<script>
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import BannerLayout from '@/Layouts/BannerLayout.vue';

export default {
    components: {
        FrontendLayout,
        BannerLayout,
    },
    data() {

    }
}
</script>
<template>
    <FrontendLayout>
        <BannerLayout>
            <div class="test-card">
                1234
            </div>
        </BannerLayout>
    </FrontendLayout>
</template>
