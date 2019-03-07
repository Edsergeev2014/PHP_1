<?php
function activ_table_customers() {
    $mysql = mysqli_connect('localhost', 'root', 'mysql', 'images');
    // Проверяем подключение базы данных
    if (mysqli_connect_errno()) {
        printf("Не удалось подключиться к Базе данных: %s\n", mysqli_connect_error());
        exit();
    }
    // Устанавливаем кодировку соединения
    mysqli_query($mysql, "SET NAMES utf8 COLLATE utf8_unicode_ci");
// }

// function authorization() {
    // Проверяем e-mail и пароль
    if (!empty($_POST["email"])&&!empty($_POST["psw"])){
        $email_valid = htmlentities($_POST["email"]);
        $password_valid = htmlentities($_POST["psw"]);
    }
    echo "<br/> e-mail на сервере: ".$email_valid;
    echo "<br/> password на сервере: ".$password_valid;
    echo "<br/>";

    // Поиск e-mail из таблицы
    $query = "SELECT `email` FROM `customers` WHERE `email` LIKE \'ed.sergeev@gmail.com\'";
    // mysqli_query($mysql, $query);

    if (!mysqli_query($mysql, $query)) {
        echo "E-mail не найден. Повторите ввод...";

        var_dump (mysqli_query($mysql, $query));
        return false;
    }

    // Проверка на соответствие пароля
    $customer = mysqli_fetch_assoc($query);
    if (!$customer['password'] == $password_valid) {
        echo "Неверный пароль";
        return false;
    }

    // Сообщаем о результате поиска

    echo "Вы успешно авторизовались!<br/>";
    return true;
}

function add_customer() {


// Пример добавления строки в БД
// INSERT INTO `images`.`customers` (`id_customer`, `name`, `surname`, `email`, `phone`, `city`, `address`, `date_registr`) VALUES ('null', 'Эдуард', 'Сергеев', 'ed.sergeev@gmail.com', '+79092472565', 'Иваново', 'ул.Ташкентская, 7-100', CURRENT_TIMESTAMP);
}
?>