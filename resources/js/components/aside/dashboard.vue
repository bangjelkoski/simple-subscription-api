<template>
    <div class="bg-white p-4 shadow rounded-lg mb-4">
        <ul class="list-arrow">
            <li @click="createdForDemoPurposes">
                <button type="button">Dashboard</button>
                <span>&rsaquo;</span>
            </li>
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