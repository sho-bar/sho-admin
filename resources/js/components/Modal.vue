<template>
    <div>
        <div class="sho-admin-modal sho-admin-modal-active">
            <tabs>
                <tab name="nice" :selected="true">Nice content</tab>
                <tab name="nice2">Nice 2 content</tab>
                <tab name="nice3">Nice 3 content</tab>
            </tabs>
        </div>
        <div class="sho-admin-overlay" @click="hideModal"></div>
    </div>
</template>

<script>
export default {
    created() {
        window.addEventListener('keyup', e => {
            e.key === "Escape" ? this.hideModal() : null
        })
    },
    methods: {
        hideModal() {
            Event.$emit('hide-modal')
        },
    },
}
</script>