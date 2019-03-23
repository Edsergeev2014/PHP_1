<!DOCTYPE html>
<head>
    <title>Простой калькулятор</title>
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
<!-- <p>Main block</p> -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Главная</a></li>
    <li class="breadcrumb-item active" aria-current="page">Упрощённый калькулятор</li>
  </ol>
</nav>
<h4>Задание п.1 Упрощенный калькулятор:</h4>
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
    <label for="exampleFormControlSelect1">Действие</label>
    <select name="action" class="form-control" id="exampleFormControlSelect3">
      <option value=сложить>сложить</option>
      <option value=вычесть>вычесть</option>
      <option value=умножить>умножить</option>
      <option value=разделить>разделить</option>
    </select>
  </div>
  <div class="form-group">
  <button type="submit" class="btn btn-primary">Рассчитать</button>

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