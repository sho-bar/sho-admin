<template>
    <div @click="isVisible = !isVisible">
        <span class="ab-label">#ШО админ</span>
        <modal v-if="isVisible"></modal>
    </div>
</template>

<script>
import Modal from './Modal'

export default {
    data() {
        return {
            isVisible: false,
        }
    },
    created() {
        this.hideModal()
    },
    methods: {
        hideModal() {
            Event.$on('hide-modal', () => isVisible = !isVisible)
        },
    },
    components: {
        Modal,
    },
}
</script>