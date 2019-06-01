<template>
    <div>
        <div class="sho-admin-modal">
            here is the content
        </div>
        <div class="sho-admin-overlay" @click="hideModal"></div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            //
        }
    },
    methods: {
        hideModal() {
            Event.$emit('hide-modal')
        },
    },
}
</script>