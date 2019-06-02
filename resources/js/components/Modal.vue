<template>
    <div>
        <!-- Modal -->
        <div class="sho-admin-modal" v-if="modal">
            <tabs>
                <tab name="Фото отчеты" :selected="true">
                    <photo-report></photo-report>
                </tab>
                <tab name="Обрезать фото">
                    Этот раздел еще не готов
                </tab>
            </tabs>
        </div>

        <!-- Overlay -->
        <div class="sho-admin-overlay" @click="hideModal" v-if="modal"></div>

        <!-- Message -->
        <transition name="slide">
            <div class="sho-admin-message" v-if="message.length != 0">
                {{ message }}
            </div>
        </transition>
    </div>
</template>

<script>
import PhotoReport from './Tabs/PhotoReport'
export default {
    data() {
        return {
            message: '',
            modal: false,
        }
    },
    created() {
        window.addEventListener('keyup', e => {
            e.key === "Escape" ? this.hideModal() : null
        })
        Event.$on('show-message', msg => this.showMessage(msg))
        Event.$on('show-modal', () => this.showModal())
    },
    methods: {
        showModal() {
            this.modal = true
        },
        hideModal() {
            this.modal = false
        },
        showMessage(msg) {
            this.message = msg
            setTimeout(() => this.message = '', 5000)
        }
    },
    components: {
        PhotoReport,
    },
}
</script>

<style lang="sass" scoped>
.slide
    &-enter-active
        transition: opacity .3s ease, transform .3s ease

    &-leave-active
        transition: all 1s cubic-bezier(1.0, 0.5, 0.8, 1.0)

    &-enter, &-leave-to
        transform: translateX(20px)
        opacity: 0
</style>
