<template>
    <section>
        <h2 class="text-2xl font-bold mb-4">Subscribers</h2>

        <div class="card">
            <ul class="list-subscribers"></ul>
        </div>
    </section>
</template>

<script>
    export default {
        data: () => ({
            subscribers: [],
        }),

        created() {
            window.axios.get(`/api/subscribers`).then(({ data }) => {
                this.subscribers = data;
            });
        },
    };
</script>