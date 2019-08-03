<template>
    <form>
        <h2 class="text-2xl font-bold">Subscriber - {{ subscriber.name }}</h2>

        <div class="row">
            <div class="col w-full"
                v-for="field in subscriber.fields"
                :key="`field-${field.id}`">

                <component :is="`input-${field.type.code}`"
                    v-model="form[field.type.formOptions.code]"
                    :placeholder="field.type.formOptions.placeholder"
                    :options="field.type.formOptions.options"
                    :value="form[field.type.formOptions.code]"
                    :label="field.type.formOptions.label"></component>
            </div>

            <div class="col w-full">
                <button type="button"
                    @click="handleFormSubmitted"
                    class="text-center text-sm rounded-lg bg-blue-500 py-3 px-4 text-white outline-none focus:outline-none">
                    Update
                </button>
            </div>
        </div>
    </form>
</template>

<script>
    export default {
        data: () => ({
            subscriber: {},

            form: {},
        }),

        methods: {
            handleFormSubmitted() {
                window.axios
                    .post(`/api/subscribers/${this.subscriber.id}`, this.form)
                    .then(() => {
                        return this.$router.push({ name: 'subscribers-index' });
                    })
                    .catch(({ response }) => {
                        if (response.status === 422) {
                            alert('Please fill out the form');
                        }
                    });
            },
        },

        created() {
            window.axios.get(`/api/subscribers/${this.$route.params.subscriber}`).then(({ data }) => {
                this.subscriber = data.data;

                this.subscriber.fields.forEach(({ type: { formOptions: { code, value } } }) => {
                    this.form[code] = value;
                });
            });
        },
    };
</script>