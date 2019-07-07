<template>
    <div>
        <!-- Button -->
        <span class="ab-label" @click="showModal">
            #ШО админ
        </span>
    </div>
</template>

<script>
export default {
    methods: {
        showModal() {
            Event.$emit('show-modal')
        },
    },
}
</script>