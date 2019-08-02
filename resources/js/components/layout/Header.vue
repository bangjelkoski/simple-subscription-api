<template>
    <header class="h-12 bg-white border-b w-full rounded-t-lg">
        <div class="flex justify-between items-center h-full px-8">
            <h1 class="font-bold lowercase text-lg font-headings">subscribers<span class="text-blue-500">api</span></h1>

            <nav class="flex items-center">
                <div class="hover:text-blue-700 cursor-pointer mr-8"
                    :class="homeIconClass"
                    @click="$router.push({name: 'home'})">
                    <svg version="1.1"
                        class="fill-current w-6 h-6"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px"
                        y="0px"
                        viewBox="0 0 21 21"
                        xml:space="preserve">
                        <path d="M18.7,9.3l-7.1-5.6c-0.3-0.3-0.8-0.3-1.2,0L3.4,9.3C3.1,9.5,3,9.7,3,10v7C3,17.6,3.4,18,3.9,18s0.9-0.4,0.9-0.9v-6.6L11,5.6
	l6.1,4.9v5.6h-3.4c-0.5,0-0.9,0.4-0.9,0.9s0.4,0.9,0.9,0.9h4.3c0.5,0,0.9-0.4,0.9-0.9v-7C19,9.7,18.9,9.5,18.7,9.3z" />
                    </svg>
                </div>

                <!-- Notifications Icon -- Just to make the UI look filled -->
                <div class="text-gray-500 mr-8 hover:text-blue-700 cursor-pointer">
                    <svg version="1.2"
                        baseProfile="tiny"
                        xmlns="http://www.w3.org/2000/svg"
                        class="fill-current w-6 h-6"
                        viewBox="0 0 24 24">
                        <path d="M19.715 17.301c-.017-.018-1.717-1.854-1.73-6.32-.009-2.607-1.69-4.824-4.019-5.641l.034-.34c0-1.103-.896-2-2-2s-2 .897-2 2l.034.338c-2.336.816-4.019 3.036-4.019 5.646 0 4.462-1.711 6.296-1.721 6.306-.287.286-.374.716-.22 1.091s.521.619.926.619h3.143c.447 1.72 1.999 3 3.857 3s3.41-1.28 3.857-3h3.143c.4 0 .758-.243.915-.61s.076-.799-.2-1.089zm-7.715-10.301c2.189 0 3.978 1.789 3.984 3.987.002.728.046 1.396.118 2.013h-8.2c.071-.617.113-1.286.113-2.016.001-2.196 1.788-3.984 3.985-3.984zm0 13c-.737 0-1.375-.405-1.722-1h3.443c-.346.595-.984 1-1.721 1zm-5.186-3c.352-.736.705-1.731.938-3h8.502c.234 1.269.588 2.264.938 3h-10.378z" /></svg>
                </div>

                <!-- Search Icon -- Just to make the UI look filled -->
                <div class="text-gray-500 mr-8 hover:text-blue-700 cursor-pointer">
                    <svg version="1.1"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px"
                        y="0px"
                        class="fill-current w-6 h-6"
                        viewBox="0 0 21 21"
                        xml:space="preserve">
                        <path d="M17.6,15.9l-3.3-3.3c0,0,0,0-0.1,0c0.6-1,1-2.1,1-3.4c0-3.4-2.8-6.2-6.2-6.2S3,5.8,3,9.2c0,3.4,2.8,6.2,6.2,6.2
	c1.3,0,2.4-0.4,3.4-1c0,0,0,0,0,0.1l3.3,3.3c0.5,0.5,1.3,0.5,1.8,0C18.1,17.1,18.1,16.3,17.6,15.9z M9.2,13.2c-2.2,0-4-1.8-4-4
	c0-2.2,1.8-4,4-4c2.2,0,4,1.8,4,4S11.4,13.2,9.2,13.2z" />
                    </svg>
                </div>

                <!-- Profile Icon -- Just to make the UI look filled -->
                <div class="w-10 h-10 rounded-full shadow cursor-pointer">
                    <img src="/static/images/avatar.jpg"
                        alt="Avatar"
                        class="w-full object-cover rounded-full h-auto">
                </div>

            </nav>

        </div>
    </header>
</template>

<script>
    export default {
        computed: {
            homeIconClass() {
                return this.$route.name === 'home' ? 'text-gray-500' : 'text-blue-500';
            },
        },
    };
</script>