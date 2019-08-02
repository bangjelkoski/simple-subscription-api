<template>
    <form @submit="handleFormSubmitted">
        <h2 class="text-2xl font-bold">Subscribers</h2>

        <div class="row">
            <div class="col w-full"
                v-for="field in fields"
                :key="`field-${field.id}`">
                <div v-html="field.type.form"></div>
            </div>
        </div>
    </form>
</template>

<script>
    export default {
        data: () => ({
            fields: [],
        }),

        computed: {
            form() {
                //
            },
        },

        methods: {
            handleFormSubmitted() {
                window.axios.post(`/api/subscribers`, this.form).then(() => {
                    return this.$router.push({ name: 'subscribers-index' });
                });
            },
        },

        created() {
            window.axios.get(`/api/fields`).then(({ data }) => {
                this.fields = data.data;
            });
        },
    };
</script>