<template>
    <div class="bg-white p-4 shadow rounded-lg mb-4">
        <ul class="list-arrow">
            <li @click="createdForDemoPurposes">
                <button type="button">Campaigns</button>
                <span>&rsaquo;</span>
            </li>
            <li class="working" @click="$router.push({name: 'subscribers'})">
                <button type="button">Subscribers</button>
                <span>&rsaquo;</span>
            </li>
            <li class="working" @click="$router.push({name: 'fields'})">
                <button type="button">Fields</button>
                <span>&rsaquo;</span>
            </li>
        </ul>
    </div>
</template>