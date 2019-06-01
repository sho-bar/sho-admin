<template>
    <div class="sho-admin-form--wrap">
        <form action="" enctype="multipart/form-data" class="sho-admin-form">
            <div class="sho-admin-form__input">
                <label for="sho-admin-name">Заголовок</label>
                <input type="text" id="sho-admin-name" name="name">
            </div>
            <div class="sho-admin-form__input">
                <label for="sho-admin-shortcode">Эльвира Шорткод</label>
                <input type="text" id="sho-admin-shorcode" name="shortcode">
            </div>
            <div class="sho-admin-form__input">
                <label for="sho-admin-image">Изображение</label>
                <input type="file" id="sho-admin-image" name="image">
            </div>

            <div class="submit">
                <input type="submit" name="submit" class="button button-primary" value="Создать">
                <a href="javascript:;" class="button">Автозаполнение</a>
            </div>
        </form>
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
        //
    },
    computed: {
        //
    },
}
</script>