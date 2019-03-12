<!DOCTYPE html>
<head>
    <title>Get&Put | Кнопочный алькулятор</title>
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
<h4>Задание п.2 Создать калькулятор, который будет определять тип выбранной пользователем операции, ориентируясь на нажатую кнопку.</h4>

<div id="calc">
        <span style="font:italic 13px Times New Roman; color:lightGrey;"></span><br>
        <form name="inp">
            <input type="text" name="ut" readonly id="display" value="" placeholder="0">
        </form>
        <button class="btnN" onclick= "myInput('1')">1</button>
        <button class="btnN" onclick= "myInput('2')">2</button>
        <button class="btn" onclick= "myInput('3')">3</button>
        <button class= "txt" onclick= "CLR()">CLR</button>
        <button class= "txt" onclick= "DEL()">DEL</button>
        <br>
        <button class="btnN" onclick= "myInput('4')">4</button>
        <button class="btnN" onclick= "myInput('5')">5</button>
        <button class="btnN" onclick= "myInput('6')">6</button>
        <button class= "opr" onclick= "myInput('+')">+</button>
        <button class= "opr" onclick= "myInput('-')">-</button>
        <br>
        <button class="btnN" onclick= "myInput('7')">7</button>
        <button class="btnN" onclick= "myInput('8')">8</button>
        <button class="btnN" onclick= "myInput('9')">9</button>
        <button class= "opr" onclick= "myInput('*')">×</button>
        <button class= "opr" onclick= "myInput('/')">÷</button>
        <br>
        <button class="btnD" id="9" onclick= "myInput('.')">.</button> 
        <button class="btnN" onclick= "myInput('0')">0</button>
        <button class="btnR" onclick= "myResult()">=</button>
       <button class="bct" onclick= "myInput('(')">(</button>
       <button class="bct" onclick= "myInput(')')">)</button>
</div>

<style>
section div {
    width:40%;
    height:50%;
    margin:0;
}

form #display {
    height:30px;
    width:95%;
    padding:1px;
    font-size:25px;
    border:2px inset grey;
    border-radius:5px;
    margin-bottom:5%;
}

#calc {
    width:88%;
    height:auto;
    margin:0;
    padding:5%;
    border:3px groove grey;
    border-radius:20px;
    background-color:grey;
    position:static;
}

#calc button {
    height:40px;
    width:16.4%;
    border:1px outset grey;
    border-radius:3px;
    font-family:sans-serif;
    font-size:18px;
    text-align:center;
    margin:1%;
}

.btnN {
    background-color:light-grey;//default
    border-style:outset;
}

.opr {
    background-color:#FE893A;//orange
}

.txt {
    background-color:#EAED4F;//yellow
}

.bct {
    background-color:orange;
}
</style>

<script>
    function myInput(i) {
        if (inp.ut.value == "Syntax Error" || inp.ut.value == "undefined" || inp.ut.value == "NaN") {
            inp.ut.value = "";
        }
        inp.ut.value += i;
    }

    function myResult() {
        try {
            inp.ut.value = eval(inp.ut.value);
        }
        catch (err) {
            inp.ut.value = "Syntax Error";
        }
    }

    function CLR() {
        inp.ut.value = "";
    }

    function DEL() {
        inp.ut.value = inp.ut.value.substr(0, inp.ut.value.length-1);
    }
</script>

<div>
<a href='index.php' class='button_view'>Вернуться</a>
</div>


</section>
</main>
<? 
require("assets/inc/modal_popup.php");
require("assets/inc/footer.inc")
?>