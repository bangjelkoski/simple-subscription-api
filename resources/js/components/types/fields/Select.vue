<template>
    <div class="mb-4 relative">
        <label class="text-xs font-bold mb-1 leading-loose"
            :for="_uid">
            {{ label }}
        </label>
        <div class="relative">
            <select :id="_uid"
                :name="name || label"
                :value="value"
                @change="handleInput"
                class="input bg-select">
                <option value="">&mdash;</option>
                <option v-for="(option, index) in options"
                    :key="`option-${index}`"
                    :value="option.value">{{ option.label }}</option>
            </select>
        </div>
    </div>
</template>

<script>
    import InputMixin from './mixin';

    export default {
        props: {
            options: {
                required: true,
            },
        },

        methods: {
            handleInput(e) {
                this.$emit('input', e.currentTarget.value);
            },
        },

        mixins: [InputMixin],
    };
</script>