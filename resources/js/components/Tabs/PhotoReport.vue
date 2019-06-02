<template>
    <div class="sho-admin-form--wrap">
        <form enctype="multipart/form-data" class="sho-admin-form" @submit.prevent="createReport($event)">
            <div class="sho-admin-form__input">
                <label for="sho-admin-name">Заголовок</label>
                <input type="text" id="sho-admin-name" name="name" value="2019 в #ШО" required>
            </div>
            <div class="sho-admin-form__input">
                <label for="sho-admin-shortcode">Эльвира Шорткод</label>
                <input type="text" id="sho-admin-shorcode" name="shortcode" value='[envira-gallery id=""]' required>
            </div>
            <div class="sho-admin-form__input">
                <label for="sho-admin-image">Изображение</label>
                <input type="file" id="sho-admin-image" name="image" required>
            </div>
            <div class="submit">
                <input type="submit"
                    class="button button-primary"
                    value="Создать"
                    :disabled="loading">
                <a href="javascript:;" class="button" :class="{disabled: loading}">
                    Автозаполнение
                </a>
                <div class="sho-admin-spinner" v-if="loading"></div>
            </div>
        </form>
    </div>
</template>

<script>
import Request from '../../modules/Request'
export default {
    data() {
        return {
            loading: false,
        }
    },
    methods: {
        createReport(e) {
            this.loading = true

            const formData = new FormData()

            formData.append('name', e.target.name.value)
            formData.append('image', e.target.image.files[0])
            formData.append('shortcode', e.target.shortcode.value)
            formData.append('action', 'add_photo_report')

            new Request(formData)
                .then(res => {
                    this.loading = false
                    console.log(res.data)
                })
                .catch(err => {
                    this.loading = false
                    console.log(err)
                })
        },
    },
}
</script>