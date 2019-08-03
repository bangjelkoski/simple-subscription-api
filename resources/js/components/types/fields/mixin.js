export default {
    props: {
        value: {
            required: true,
        },

        validation: {
            required: false,
            default: null,
            type: Object,
        },

        name: {
            required: false,
            default: null,
        },

        placeholder: {
            required: false,
            default: null,
        },

        label: {
            required: false,
            default: null,
        },
    },

    computed: {
        inputClass: function() {
            if (this.validation) {
                return {
                    invalid: this.validation.$error,
                    valid: !this.validation.$invalid && this.validation.$dirty,
                };
            }
        },

        /**
         * We check wether there is a validation error.
         * First we get all of the validations that are present,
         * and if there is some error we return that error
         */
        error: function() {
            if (!this.validation || (this.validation && !this.validation.$anyError)) {
                return false;
            }

            let keys = Object.keys(this.validation.$params);

            for (const key of keys) {
                if (!this.validation[key]) {
                    return this.$t(`validation.${key}`);
                }
            }
        },
    },

    methods: {
        handleChange: function(e) {
            if (this.validation) {
                this.validation.$touch();
            }

            this.$emit('input', e.target.value);
        },
    },
};
