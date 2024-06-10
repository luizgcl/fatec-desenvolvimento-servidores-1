<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Função</title>
</head>
<body> 
    <section>
    <?php
        include "functions.php";
        echo "<h1>Testando funções</h1>";
        // textFunction();
        // showValue(5);
        // echo sumFiveNumbers(1,2,3,4,5);
        // echo "<br/><br/>". subtractThreeNumbers(1,2,3);
        // echo "<br/><br/>". multiplyFourNumbers(1,2,3,4);
        // echo "<br/>";
        echo "<br/><br/>". secondDegreeFunction(-1, 1, 0);
    ?>
    <div class="retornar">
            <a href="menu.html">Menu</a>
        </div>
    </section>
</body>
</html>