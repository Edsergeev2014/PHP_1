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
<!-- <p>Main block</p> -->

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
        $popularity = $images[$count]['popularity'];

        // all graphic files from the folder
        //echo "<div>";
        //echo "<form action='cart-product-page.php' class='product-gallery' method='post' name='".$images[$count]['id']."'>";
        //echo "<a id='myModal' href='".$images[$count]['image_file_path'].$images[$count]['image_file_name']. "'><img src='". $images[$count]['thumbnail_path'].$images[$count]['thumbnail_name']. "'alt='". $images[$count]['image_name']. "'name='". $images[$count]['popularity']. "' width=200px;></a>";
        //echo "<p>". $images[$count]['image_name']. "</p>";
        //echo "<a href='cart-product-page.php' class='button_view'>Просмотр</a>";
        //echo "<button name='id_product' value='$id_product' class='button_view'>Просмотр</a>";
        //echo "</form>";
    }    
?>

<!-- Навигация: хлебные крошки: -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Галерея</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?=$images[$count]['image_name']?></li>
  </ol>
</nav>
<!-- Блок карточки товара -->
<div class="card mb-3" style="max-width: auto">
    <div class="card-header">
        Карточка товара
    </div>
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?=$images[$count]['image_file_path'].$images[$count]['image_file_name']?>" class="card-img" alt="Изображение" width="300px">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?=$images[$count]['image_name']?></h5>
        <p class="card-text"><?=$images[$count]['price']." руб."?></p>
        <p class="card-text"><small class="text-muted">Код товара: <?=$id_product?></small></p>
        <p class="card-text"><small class="text-muted">Популярность: <?=$popularity?></small></p>
      </div>
        <div class="card-footer">      
            <a href="#" class="btn btn-primary">КУПИТЬ</a>
        </div>
    </div>
  </div>
</div>

<!-- Вкладки Описания карточки товара: -->
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="#">Описание</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Характеристики</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Вкладка 2</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <p class="card-text" style="text-align:left"><small class="text-muted"><?=$images[$count]['discription']?></small></p>
  </div>
</div>




<?php
// Функция изменения популярности товаров. После просмотра фотографии происходит обновление страницы.
include_once("assets/inc/change_popularity.php");
change_popularity($id_product);
?>


</section>
</main>
<? 
require("assets/inc/modal_popup.php");
require("assets/inc/footer.inc");
?>