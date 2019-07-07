<template>
    <div>
        <ul class="sho-admin-tabs">
            <li v-for="tab in tabs" :key="tab.name"
                class="sho-admin-tabs__tab"
            >
                <a href="javascript:;"
                    v-html="tab.name"
                    :class="{ 'sho-admin-active': tab.active }"
                    @click="selectedTab(tab)">
                </a>
            </li>
        </ul>
        <div><slot></slot></div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            tabs: [],
        }
    },

    created() {
        this.tabs = this.$children
    },

    methods: {
        selectedTab(selectedTab) {
            this.tabs.forEach(tab => {
                tab.active = tab.name == selectedTab.name
            })
        },
    },
}
</script>
