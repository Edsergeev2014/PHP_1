<!DOCTYPE html>
<head>
    <title>Get&Put | Отзывы</title>
</head>
<?php
require_once("assets/inc/head.inc"); 
require_once("assets/inc/header.inc");
require_once("assets/inc/nav.php");
?>

<main>

<?php
require_once("assets/inc/aside.inc"); 
?>

<section>
<p>Main block</p>
<h4>Задание п.3 Страница доступа в Личный кабинет</h4>

<form class=feedback method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Электронный адрес:</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">Данные используются только для вашей идентификации.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Пароль:</label>
    <input type="password" name="psw" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" name="check" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Подтвердить</label>
  </div>
  <button type="submit" class="btn btn-primary">Отправить</button>
</form>


<?php 
if (!empty($_POST["email"])&&!empty($_POST["psw"])){

$user_email_valid = htmlentities($_POST[email]);
$user_psw_valid = htmlentities($_POST[psw]);
$user_check_valid = htmlentities($_POST[check]);
  
echo "<br/> e-mail: ".$user_email_valid;
echo "<br/> password: ".$user_psw_valid;
echo "<br/> check: ".$user_check_valid;

echo "<br/>";
print_r($_POST);

}
else
{
echo "<br/>Переменные не дошли. Проверьте все еще раз.";
}

?>



</section>
</main>
<? 
require("assets/inc/footer.inc")
?>

