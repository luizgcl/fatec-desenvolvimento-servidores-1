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
        function sumTwoNumbers($firstNumber, $secondNumber) {
            $sum = $firstNumber + $secondNumber;
            echo "<p>A soma = $sum</p>";
        }

        sumTwoNumbers(3, 4);
        sumTwoNumbers(8, 2);
        $number1 = 9;
        $number2 = 15;
        sumTwoNumbers($number1, $number2);
    ?>
    <div class="retornar">
            <a href="menu.html">Menu</a>
        </div>
    </section>
</body>
</html>