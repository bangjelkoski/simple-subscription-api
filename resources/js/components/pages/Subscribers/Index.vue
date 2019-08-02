<template>
    <section class="h-full overflow-y-auto">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-2xl font-bold">Subscribers</h2>

            <button class="items-center flex items-center justify-center text-sm rounded-lg bg-blue-500 py-2 px-4 text-white"
                @click="$router.push({name: 'subscribers-create'})">
                <span>Create new subscriber</span>
                <span class="ml-2 text-white">&plus;</span>
            </button>
        </div>

        <div class="row row-margin">
            <subscriber v-for="subscriber in subscribers"
                :key="`subscriber-${subscriber.id}`"
                :subscriber="subscriber" />
        </div>
    </section>
</template>

<script>
    import Subscriber from '@/partials/Subscriber';

    export default {
        data: () => ({
            subscribers: [],
        }),

        created() {
            window.axios.get(`/api/subscribers`).then(({ data }) => {
                this.subscribers = data.data;
            });
        },

        components: { Subscriber },
    };
</script>