<template>
    <div class="bg-white p-4 shadow rounded-lg mb-4">
        <ul class="list-arrow">
            <li @click="createdForDemoPurposes">
                <button type="button">Campaigns</button>
                <span>&rsaquo;</span>
            </li>
            <router-link class="working"
                :to="{ name: 'subscribers-index'}"
                tag="li">
                <button type="button">Subscribers</button>
                <span>&rsaquo;</span>
            </router-link>
            <router-link class="working"
                :to="{ name: 'fields-index'}"
                tag="li">
                <button type="button">Fields</button>
                <span>&rsaquo;</span>
            </router-link>
        </ul>
    </div>
</template>