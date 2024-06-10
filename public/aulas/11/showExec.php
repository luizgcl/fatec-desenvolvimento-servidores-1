<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Valores Recebidos</title>
</head>

<body>
    <section>
        <h1>Valores Recebidos:</h1>
        <?php
        $numbersArray = array();
        for ($iterator = 0; $iterator <= 4; $iterator++) {
            $numbersArray[$iterator] = $_GET["value" . $iterator];
            echo $numbersArray[$iterator] . "<br/>";
        }

        echo "<br/>";

        foreach ($numbersArray as $key => $value) {
            echo "<p>Colunm $key: $value </p><br/>";
        }

        echo "<br/>";

        print_r($numbersArray);
        echo "<br/>";

        var_dump($numbersArray);
        echo "<br/>";
        ?>
        <div class="retornar">
            <a href="exec1.php">Menu</a>
        </div>
    </section>
</body>

</html>