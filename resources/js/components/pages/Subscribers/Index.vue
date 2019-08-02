<template>
    <section class="h-full overflow-y-auto">
        <h2 class="text-2xl font-bold mb-4">Subscribers</h2>

        <div class="row row-margin">
            <subscriber v-for="subscriber in subscribers"
                :key="`subscriber-${subscriber.id}`"
                :subscriber="subscriber" />
        </div>
    </section>
</template>

<script>
    import Subscriber from '@/partials/subscriber';

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