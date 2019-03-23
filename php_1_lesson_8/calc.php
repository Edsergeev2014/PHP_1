<head>
    <title>Калькулятор</title>

    <link rel="stylesheet" href="assets/css/calc.css">;
    <script src="assets/js/culc.js"></script> 

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


    <div class="container">
      <div class="calculator">
        <div class="output">
          <div id="calculation">
            <!-- Display for calculation -->
          </div>
          <div id="input">
            <!-- Display for Input & Result -->
          </div>
        </div>
    
        <form>
        <div class="button-field">
        
          <button type="button" id="c" class="clear" name="clear"><span>c</span></button>
          <button type="button" id="ce" class="clear" name="clear-entry"><span>ce</span></button>
          <button type="button" id="del" class="clear" name="delete"><span>del</span></button>
          <button type="button" id="/" class="operator" name="devide">÷</button>
    
          <button type="button" id="7" class="number" name="7">7</button>
          <button type="button" id="8" class="number" name="8">8</button>
          <button type="button" id="9" class="number" name="9">9</button>
          <button type="button" id="*" class="operator" name="multiply">×</button>
    
          <button type="button" id="4" class="number" name="4">4</button>
          <button type="button" id="5" class="number" name="5">5</button>
          <button type="button" id="6" class="number" name="6">6</button>
          <button type="button" id="-" class="operator" name="substract">−</button>
    
          <button type="button" id="1" class="number" name="1">1</button>
          <button type="button" id="2" class="number" name="2">2</button>
          <button type="button" id="3" class="number" name="3">3</button>
          <button type="button" id="+" class="operator" name="add">&plus;</button>
    
          <button type="button" id="negative" class="neg" name="+/-">±</button>
          <button type="button" id="0" class="number" name="0">0</button>
          <button type="button" id="." class="dot" name="dot">.</button>
          <button type="button" id="=" class="equal" name="equal">=</button>
          
        </div>
        </form>

      </div>
    
    </div>
    

    <a href='./index.php' class='button_view'>Вернуться</a>


    </section>
</main>
<? 
require("assets/inc/modal_popup.php");
require("assets/inc/footer.inc")
?>