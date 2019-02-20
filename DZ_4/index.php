<!DOCTYPE html>
<?php
require_once("public/inc/head.inc"); 
require_once("public/inc/header.inc");
require_once("public/inc/nav.inc");
?>

<main>

<?php
require_once("public/inc/aside.inc"); 
?>

<section>
<p>Main block</p>

<?php
// п.1. Создать галерею фотографий-иконок. 
// При клике на фотографию она должна открыться в браузере в новой вкладке.
echo "<h4> Задание п.1. Галерея фотографий-иконок. При клике открываются в новой вкладке.</h4>";
echo "<h4> + Задание п.2. Функция считывает список графических файлов в категории images, используя ссылку на неё.</h4>";

// п.2. *Строить фотогалерею, не указывая статичные ссылки к файлам, 
// а просто передавая в функцию построения адрес папки с изображениями.
$path_thumbnails = "public/images/thumbnails/";
$path_mages = "public/images/";
// php-script to print the graphic files from the folder
include_once("public/inc/php_script_load_images.inc");
print_graphic_files($path_thumbnails, $path_mages);

// п.3. *При клике по миниатюре нужно показывать полноразмерное изображение в модальном окне
echo "<h4> Задание п.3. Выводим изображение в модальном окне.</h4>";
include_once("public/inc/php_script_load_images.inc"); // Пробуем подгрузить файл повторно (хотя не нужно)
print_graphic_with_id($path_thumbnails, $path_mages);
?>

<script>
<?php include_once("public/js/event_modal_popup.js"); ?>
</script>

</section>
</main>
<? 
require("public/inc/modal_popup.inc");
require("public/inc/footer.inc")
?>