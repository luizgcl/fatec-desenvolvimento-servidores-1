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
        function sumTwoNumbers($num1, $num2) {
            $sum = $num1 + $num2;
            return $sum;
        }

        echo "<h3>Retorno da função</h3>";
        $value1 = 20;
        $value2 = 30;
        $result = sumTwoNumbers($value1, $value2);
        echo "<p>A soma entre $value1 e $value2 é = $result</p>";
    ?>
    <div class="retornar">
            <a href="menu.html">Menu</a>
        </div>
    </section>
</body>
</html>