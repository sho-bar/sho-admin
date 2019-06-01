<template>
    <form action="" enctype="multipart/form-data">
        <table class="form-table">
            <tbody>
                <tr>
                    <th><label for="sho-admin-name">Заголовок</label></th>
                    <td><input type="text" id="sho-admin-name" name="name"></td>
                </tr>
                <tr>
                    <th><label for="sho-admin-shortcode">Эльвира Шорткод</label></th>
                    <td><input type="text" id="sho-admin-shorcode" name="shortcode"></td>
                </tr>
                <tr>
                    <th><label for="sho-admin-image">Изображение</label></th>
                    <td><input type="file" id="sho-admin-image" name="image"></td>
                </tr>
            </tbody>
        </table>
        <p class="submit">
            <input type="submit" name="submit" class="button button-primary" value="Создать">
            <a href="javascript:;" class="button">Автозаполнение</a>
        </p>
    </form>
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