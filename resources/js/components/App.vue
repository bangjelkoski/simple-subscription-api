<template>
    <div class="h-full h-full">
        <app-header />
        <app-main />
        <app-footer />
    </div>
</template>

<script>
    import Main from '@/layout/Main';
    import Header from '@/layout/Header';
    import Footer from '@/layout/Footer';

    export default {
        components: {
            'app-main': Main,
            'app-header': Header,
            'app-footer': Footer,
        },
    };
</script>