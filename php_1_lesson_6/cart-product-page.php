<!DOCTYPE html>
<head>
    <title>Карточка товара</title>
</head>

<?php
// Страница карточки товара
require_once("assets/inc/head.inc"); 
require_once("assets/inc/header.inc");
require_once("assets/inc/nav.php");
?>

<main>

<?php
// require_once("assets/inc/aside.inc"); 
?>

<section>
<p>Main block</p>

<?php


// просмотр конкретной фотографии (изображение оригинального размера) по её ID в базе данных.

$path_thumbnails = "assets/images/thumbnails/";
$path_images = "assets/images/";
// php-script to print the graphic files from the folder
//include_once("assets/inc/php_script_load_images.php");

$id_product = $_POST['id_product'];

// print the graphic files from the MySQL with ID
    $mysql = mysqli_connect('localhost', 'root', 'mysql', 'images');
    // Проверяем подключение базы данных
    if (mysqli_connect_errno()) {
        printf("Не удалось подключиться к Базе данных: %s\n", mysqli_connect_error());
        exit();
    }
    // Устанавливаем кодировку соединения
    mysqli_query($mysql, "SET NAMES utf8 COLLATE utf8_unicode_ci");

    // Запрашиваем данные из базы данных
    $mysql_query = mysqli_query($mysql, "SELECT * FROM options WHERE `id`=$id_product ;");
    $images = [];

    // Помещаем данные в массив и выводим на экран
    $count = 0;
    while ($row = mysqli_fetch_assoc($mysql_query)) {
        $images[] = $row;
        // Просмотр значений в массиве
        //var_dump ($images);
        //echo $images[$count]['image_file_path'].$images[$count]['image_file_name'];
        //echo "<br/><br/>";
        $id_product = $images[$count]['id'];

        // all graphic files from the folder
        echo "<div>";
        //echo "<form action='cart-product-page.php' class='product-gallery' method='post' name='".$images[$count]['id']."'>";
        echo "<a id='myModal' href='".$images[$count]['image_file_path'].$images[$count]['image_file_name']. "'><img src='". $images[$count]['thumbnail_path'].$images[$count]['thumbnail_name']. "'alt='". $images[$count]['image_name']. "'name='". $images[$count]['popularity']. "' width=200px;></a>";
        echo "<p>". $images[$count]['image_name']. "</p>";
        //echo "<a href='cart-product-page.php' class='button_view'>Просмотр</a>";
        //echo "<button name='id_product' value='$id_product' class='button_view'>Просмотр</a>";
        //echo "</form>";
    }    


echo "<div>";
echo "<img id='big_image'>";
echo "<h3 id='image_name'></h3>";
echo "<span>Популярность: </span><span id='popularity'></span>";
echo "</div>";

echo "<a href='index.php' class='button_view'>Вернуться</a>";

// Функция изменения популярности товаров. После просмотра фотографии происходит обновление страницы.
include_once("assets/inc/change_popularity.php");
change_popularity();
?>


</section>
</main>
<? 
require("assets/inc/modal_popup.php");
require("assets/inc/footer.inc");
?>