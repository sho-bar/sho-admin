<template>
    <div>
        <!-- Button -->
        <span class="ab-label" @click="showModal()">
            #ШО админ
        </span>
    </div>
</template>

<script>
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
        // Function helper that adds or removes active classes
        toggleClassOn($elSlug, $action) {
            document.querySelector(`.sho-admin-${$elSlug}`)
                .classList[$action](`sho-admin-${$elSlug}-active`)
        },
        showModal() {
            this.toggleClassOn('modal', 'add')
            this.toggleClassOn('overlay', 'add')
        },
        hideModal() {
            Event.$on('hide-modal', () => {
                this.toggleClassOn('modal', 'remove')
                this.toggleClassOn('overlay', 'remove')
            })
        },
    },
}
</script>