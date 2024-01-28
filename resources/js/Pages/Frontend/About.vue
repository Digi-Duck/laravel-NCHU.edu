<script>
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import BannerLayout from '@/Layouts/BannerLayout.vue';
import About from '@/Components/Frontend/Other/AboutPage.vue';

export default {
    components: {
        FrontendLayout,
        BannerLayout,
        About,
    },
    data() {
        return{
            images:{

            }
        }
    }
}
</script>
<template>
    <FrontendLayout>
        <BannerLayout>
            <div >
                <About />
            </div>
        </BannerLayout>
    </FrontendLayout>
</template>
