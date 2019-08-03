<template>
    <div class="mb-4 relative">
        <label class="text-xs font-bold mb-1 leading-loose"
            :for="_uid">
            {{ label }}
        </label>
        <div class="relative">
            <input type="email"
                :id="_uid"
                :name="name || label"
                :value="value"
                :placeholder="placeholder"
                @change="handleChange"
                class="input" />
        </div>
    </div>
</template>

<script>
    import InputMixin from './mixin';

    export default {
        mixins: [InputMixin],
    };
</script>