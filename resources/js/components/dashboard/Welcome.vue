<template>
    <div class="col w-2/3">
        <div class="bg-teal-100 rounded-lg border-2 border-teal-300 shadow">
            <div class="flex justify-between items-center px-4">
                <div class="">
                    <h2 class="font-bold text-teal-800 text-2xl mb-4">Welcome back John!</h2>
                    <p class="text-lg mb-6 text-teal-700">In your dashboard, you can see how your campaigns perform!</p>
                    <button class="items-center flex items-center justify-center text-sm rounded-lg bg-blue-500 py-2 px-4 text-white mb-0"
                        @click="$router.push({name: 'subscribers-index'})">
                        <span>View Subscribers</span>
                        <span class="ml-2 text-white">
                            &rsaquo;
                        </span>
                    </button>
                </div>
                <svg-welcome />
            </div>
        </div>
    </div>
</template>

<script>
    import SvgWelcome from '@/svgs/Welcome';

    export default {
        components: {
            SvgWelcome,
        },
    };
</script>