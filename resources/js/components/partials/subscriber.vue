<template>
    <div class="col w-1/2">
        <div class="card cursor-pointer"
            @click="$router.push({name: 'subscribers-edit', params: {subscriber: subscriber.id}})">
            <div class="bg-indigo-100 h-12 border-t border-r border-l rounded-t-lg"></div>
            <div class="rounded-b-lg">
                <div class="-mt-8">
                    <img :src="subscriber.image"
                        :alt="subscriber.name"
                        class="mx-auto w-16 h-16 rounded-full">
                </div>
                <div class="bg-white h-24 text-center rounded-b-lg">
                    <h3 class="text-xl font-bold">{{ subscriber.name }}</h3>
                    <p class="text-sm mb-2">
                        <span class="mr-4">{{ subscriber.email }}</span>
                    </p>
                    <p class="text-xs mb-2">
                        <span class="bg-teal-500 text-white px-2 py-1 text-white rounded-lg">{{ subscriber.state }}</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            subscriber: {
                required: true,
            },
        },
    };
</script>