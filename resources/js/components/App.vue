<template>
    <div class="my-8 w-3/4 rounded-lg bg-gray-100 shadow-lg mx-auto">
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