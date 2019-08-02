<template>
    <section>
        <div class="row mb-4">
            <welcome />
            <inbox />
        </div>

        <div class="row mb-4">
            <div class="col w-1/2 mb-4">
                <div class="card p-4">
                    <h2 class="font-bold text-teal-800 text-2xl mb-2">Monthly Subscribers</h2>
                    <h2 class="font-bold text-lg mb-1 text-4xl font-bold text-blue-700">{{ parseInt(Math.random() * (1000 - 100) + 100) }}</h2>
                </div>
            </div>
            <div class="col w-1/2 mb-4">
                <div class="card p-4">
                    <h2 class="font-bold text-teal-800 text-2xl mb-2">Total Subscribers</h2>
                    <h2 class="font-bold text-lg mb-1 text-4xl font-bold text-blue-700">{{ parseInt(Math.random() * (1000 - 100) + 100) }}</h2>
                </div>
            </div>
            <div class="col w-1/2">
                <div class="card p-4">
                    <h2 class="font-bold text-teal-800 text-2xl mb-2">Monthly Income</h2>
                    <h2 class="font-bold text-lg mb-1 text-4xl font-bold text-blue-700">{{ `$ ${parseInt(Math.random() * (1000 - 100) + 100)}` }}</h2>
                </div>
            </div>
            <div class="col w-1/2">
                <div class="card p-4">
                    <h2 class="font-bold text-teal-800 text-2xl mb-2">Total Income</h2>
                    <h2 class="font-bold text-lg mb-1 text-4xl font-bold text-blue-700">{{ `$ ${parseInt(Math.random() * (1000 - 100) + 100)}` }}</h2>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    import DashboardMixin from '@/dashboard';

    export default {
        mixins: [DashboardMixin],
    };
</script>
