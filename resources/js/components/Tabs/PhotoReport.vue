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
            const options = {
                params: {
                    name: e.target.name.value,
                    image: e.target.image.value,
                    shortcode: e.target.shortcode.value,
                },
                method:'add_photo_report',
            }

            new Request(options)
                .then(res => console.log(res.data))
                .catch(err => console.log(err))
        },
    },
}
</script>