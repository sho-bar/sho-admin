<template>
    <div>
        <div class="sho-admin-modal">
            <tabs>
                <tab name="Фото отчеты" :selected="true">
                    <photo-report></photo-report>
                </tab>
                <tab name="Обрезать фото">
                    Этот раздел еще не готов
                </tab>
            </tabs>
        </div>
        <div class="sho-admin-overlay" @click="hideModal"></div>
    </div>
</template>

<script>
import PhotoReport from './Tabs/PhotoReport'
export default {
    created() {
        window.addEventListener('keyup', e =>
            e.key === "Escape" ? this.hideModal() : null
        )
    },
    methods: {
        hideModal() {
            Event.$emit('hide-modal')
        },
    },
    components: {
        PhotoReport,
    },
}
</script>