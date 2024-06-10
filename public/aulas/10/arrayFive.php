<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Array</title>
</head>
<body>
    <section>
    <pre>
        <?php
        $numbers[0][0] = 5;
        $numbers[0][1] = 30;
        $numbers[0][2] = 45;
        $numbers[1][0] = 100;
        $numbers[1][1] = 200;
        $numbers[1][2] = 300;

        echo "<p>Mostra com print_r </p>";
        print_r($numbers);

        echo "<p>Mostra com var_dump</p>";
        var_dump($numbers);

        echo "<p>Percorrendo um array com foreach mostrando chave e valor </p><br/>";
        foreach ($numbers as $row => $innerArray) {
            echo "<p>--> Linha: $row </p><br/>";
            foreach ($innerArray as $col => $value) {
                echo "<p>Coluna: $col: $value </p><br/>";
            }
        }
    ?>
    </pre>
    <div class="retornar">
            <a href="index.php">Menu</a>
        </div>
    </section>
</body>
</html>