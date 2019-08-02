<template>
    <div class="col w-1/3 h-48">
        <div class="bg-orange-100 rounded-lg border-2 border-orange-300 shadow h-full">
            <div class="flex justify-between items-center px-4 h-full">
                <div class="mt-4 ">
                    <h3 class="uppercase text-orange-800 font-bold text-2xl">Inbox</h3>
                    <h2 class="font-bold text-lg mb-6 text-5xl font-bold text-orange-700">{{ parseInt(Math.random() * (1000 - 100) + 100) }}</h2>
                </div>
                <svg-Inbox />
            </div>
        </div>
    </div>
</template>

<script>
    import SvgInbox from '@/svgs/Inbox';

    export default {
        components: {
            SvgInbox,
        },
    };
</script>