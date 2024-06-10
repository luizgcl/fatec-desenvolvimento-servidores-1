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
        function sumOfTwoNumbers($num1, $num2) {
            $sum = $num1 + $num2;
            echo "<p>A soma entre $num1 e $num2 = $sum</p>";
        }

        echo "<h3>Função sem retorno</h3>";
        $value1 = 20;
        $value2 = 30;
        sumOfTwoNumbers($value1, $value2);
    ?>
    <div class="retornar">
            <a href="menu.html">Menu</a>
        </div>
    </section>
</body>
</html>