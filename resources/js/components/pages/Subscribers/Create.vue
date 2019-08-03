<template>
    <form>
        <h2 class="text-2xl font-bold">Subscribers</h2>

        <div class="row">
            <div class="col w-full"
                v-for="field in fields"
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
                    class="text-center text-sm rounded-lg bg-blue-500 py-3 px-4 text-white">
                    Create
                </button>
            </div>
        </div>
    </form>
</template>

<script>
    export default {
        data: () => ({
            fields: [],

            form: {},
        }),

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

                this.fields.forEach(({ type: { formOptions: { code, value } } }) => {
                    this.form[code] = value;
                });
            });
        },
    };
</script>