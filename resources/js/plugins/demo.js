export default {
    install: function(Vue, options) {
        Vue.mixin({
            methods: {
                createdForDemoPurposes: function() {
                    alert('This was created only for demo UI purposes!');
                },
            },
        });
    },
};
