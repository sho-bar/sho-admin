<template>
    <div>
        <!-- Button -->
        <span class="ab-label" @click="isVisible = true">
            #ШО админ
        </span>

        <!-- Modal -->
        <transition name="slide" mode="out-in">
            <modal v-if="isVisible"></modal>
        </transition>
    </div>
</template>

<script>
import Modal from './Modal'

export default {
    data() {
        return {
            isVisible: true,
        }
    },
    created() {
        this.hideModal()
    },
    methods: {
        hideModal() {
            Event.$on('hide-modal', () => this.isVisible = false)
        },
    },
    components: {
        Modal,
    },
}
</script>

<style lang="sass" scoped>
.slide
    &-enter-active,
    &-leave-active
        transition: opacity 300ms !important

    &-enter, &-leave-to
        opacity: 0 !important
</style>
