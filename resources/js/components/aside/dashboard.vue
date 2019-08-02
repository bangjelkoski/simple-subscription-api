<template>
    <div class="bg-white p-4 shadow rounded-lg mb-4">
        <ul class="list-arrow">
            <router-link class="working"
                :to="{ name: 'home'}"
                tag="li"
                exact>
                <button type="button">Dashboard</button>
                <span>&rsaquo;</span>
            </router-link>
            <li @click="createdForDemoPurposes">
                <button type="button">Statistics</button>
                <span>&rsaquo;</span>
            </li>
            <li @click="createdForDemoPurposes">
                <button type="button">Newsletters</button>
                <span>&rsaquo;</span>
            </li>
        </ul>
    </div>
</template>