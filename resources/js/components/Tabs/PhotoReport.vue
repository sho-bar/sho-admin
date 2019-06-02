<template>
    <div class="sho-admin-form--wrap">
        <form enctype="multipart/form-data" class="sho-admin-form" @submit.prevent="createReport($event)">
            <div class="sho-admin-form__input">
                <label for="sho-admin-name">Заголовок</label>
                <input type="text" id="sho-admin-name" name="name" value="11" required>
            </div>
            <div class="sho-admin-form__input">
                <label for="sho-admin-shortcode">Эльвира Шорткод</label>
                <input type="text" id="sho-admin-shorcode" name="shortcode" value="[some code here]" required>
            </div>
            <div class="sho-admin-form__input">
                <label for="sho-admin-image">Изображение</label>
                <input type="file" id="sho-admin-image" name="image" >
            </div>
            <div class="submit">
                <input type="submit" class="button button-primary" value="Создать">
                <a href="javascript:;" class="button">Автозаполнение</a>
            </div>
        </form>
    </div>
</template>

<script>
import Request from '../../modules/Request'
export default {
    data() {
        return {
        }
    },
    methods: {
        createReport(e) {
            const formData = new FormData()

            formData.append('name', e.target.name.value)
            formData.append('image', e.target.image.files[0])
            formData.append('shortcode', e.target.shortcode.value)
            formData.append('action', 'add_photo_report')

            new Request(formData)
                .then(res => console.log(res.data))
                .catch(err => console.log(err))
        },
    },
}
</script>