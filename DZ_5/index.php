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
// п.1. Создать галерею изображений, состоящую из двух страниц. 
// просмотр всех фотографий (уменьшенных копий);
// просмотр конкретной фотографии (изображение оригинального размера) по её ID в базе данных.
echo "<h4> Задание п.1. Галерея фотографий-иконок. Состоит из двух страниц.</h4>";
echo "<h4> Просмотр фотографии (изображение оригинального размера) по её ID из базы данных.</h4>";

$path_thumbnails = "public/images/thumbnails/";
$path_images = "public/images/";
// php-script to print the graphic files from the folder
include_once("public/inc/php_script_load_images.php");


// п.2. В базе данных создать таблицу, в которой будет храниться информация о картинках (адрес на сервере, размер, имя).
// Функция загрузки файлов и опций в Базу данных.
// !!! ИСПОЛЬЗОВАТЬ, ЕСЛИ ТОЛЬКО НЕОБХОДИМО ЗАЛИТЬ ТОВАРЫ В БД MySQL
//load_image_from_dir_to_DBase($path_thumbnails,$path_images);

// п.3. * На странице просмотра фотографии полного размера под картинкой должно быть указано число её просмотров.
// Функция выгрузки из Базы данных файлов с изображением
// и размещение их в галерее
print_graphic_from_MySQL_with_id($quantity);

// п.4. * На странице просмотра галереи список фотографий должен быть отсортирован по популярности. Популярность - число кликов по фотографии.
// Функция изменения популярности товаров. После просмотра фотографии происходит обновление страницы.
include_once("public/inc/change_popularity.php");
change_popularity();




?>

<script>
<?php include_once("public/js/event_modal_popup.js"); ?>
</script>

</section>
</main>
<? 
require("public/inc/modal_popup.php");
require("public/inc/footer.inc")
?>