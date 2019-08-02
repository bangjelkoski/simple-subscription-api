<template>
    <div class="py-8 px-4 w-full h-main">
        <div class="-mx-2 flex flex-wrap h-full">

            <aside class="h-full w-1/4 px-2">
                <create-button />
                <dashboard-menu />
                <subscribers-menu />
                <about-menu />
            </aside>

            <main class="h-full w-3/4 px-2">
                <router-view />
            </main>
        </div>
    </div>
</template>

<script>
    import AsideMixin from '../aside';

    export default {
        mixins: [AsideMixin],
    };
</script>