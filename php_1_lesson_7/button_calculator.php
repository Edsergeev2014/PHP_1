<!DOCTYPE html>

<?php
require_once("assets/inc/head.inc"); 
require_once("assets/inc/header.inc");
require_once("assets/inc/nav.php");
?>
<head>
    <title>Get&Put | Кнопочный калькулятор</title>
    <style>
        button {
            margin: 5px 5px;
            box-sizing: border-box;
            width: 40px;
        }
    </style>
</head>

<main>

<?php
require_once("assets/inc/aside.inc"); 
?>

<section>
<!-- <p>Main block</p> -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Галерея</a></li>
    <li class="breadcrumb-item active" aria-current="page">Кнопочный калькулятор</li>
  </ol>
</nav>

<h4>Задание п.2 Калькулятор: определяет тип операции по нажатой кнопке</h4>
<form method="post">
  <div class="form-group">
    <label for="exampleFormControlSelect1">Аргумент 1</label>
    <select name="arg_1" class="form-control" id="exampleFormControlSelect1">
      <option value=0>0</option>  
      <option value=1>1</option>
      <option value=2>2</option>
      <option value=3>3</option>
      <option value=4>4</option>
      <option value=5>5</option>
      <option value=6>6</option>
      <option value=7>7</option>
      <option value=8>8</option>
      <option value=9>9</option>
    </select>
  </div>
  <div class="form-group">
  <label for="exampleFormControlSelect1">Аргумент 2</label>
    <select name="arg_2" class="form-control" id="exampleFormControlSelect2">
    <option value=0>0</option>  
      <option value=1>1</option>
      <option value=2>2</option>
      <option value=3>3</option>
      <option value=4>4</option>
      <option value=5>5</option>
      <option value=6>6</option>
      <option value=7>7</option>
      <option value=8>8</option>
      <option value=9>9</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Действие:</label>
    <button name="action" value=сложить type="submit" class="btn btn-outline-secondary">+</button>
    <button name="action" value=вычесть type="submit" class="btn btn-outline-secondary">-</button>
    <button name="action" value=умножить type="submit" class="btn btn-outline-secondary">x</button>
    <button name="action" value=разделить type="submit" class="btn btn-outline-secondary">/</button>  </div>
  </div>
</form>


<textarea class="form-control" id="exampleFormControlTextarea1" rows="1" cols="50" readonly >
    <? 
        $arg_1 = $_POST['arg_1'];
        $arg_2 = $_POST['arg_2'];
        switch ($_POST['action']) {
            case "сложить": 
                $result = sum($arg_1,$arg_2);
                $action = "+";
                break;
            case "вычесть":
                $result = minus($arg_1,$arg_2);
                $action = "-";
                break;
            case "умножить":
                $result = multiply($arg_1,$arg_2);
                $action = "*";
                break;
            case "разделить":
                $result = division($arg_1,$arg_2); 
                $action = "/";
        }
        echo $arg_1." ".$action." ".$arg_2." = ".$result;
        function sum($arg_1,$arg_2) {return $arg_1+$arg_2;} 
        function minus($arg_1,$arg_2) {return $arg_1-$arg_2;} 
        function multiply($arg_1,$arg_2) {return $arg_1*$arg_2;} 
        function division($arg_1,$arg_2) {
            if ($arg_2 != 0) return $arg_1/$arg_2;
            else echo "Операция не выполнена: деление на ноль! ";
        }
    ?>
</textarea>


</section>
</main>
<? 
require("assets/inc/footer.inc")
?>