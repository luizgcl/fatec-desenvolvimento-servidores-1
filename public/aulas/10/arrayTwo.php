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

            $bands = array("queen", "Scorpions", "Foo Figthers", "AC/DC");
            echo "<p>Visalização com print_r </p>";
            print_r($bands);
            echo "<p>Visualização com var_dump</p>";
            var_dump($bands);
        ?>
    </pre>
    <div class="retornar">
            <a href="index.php">Menu</a>
        </div>
    </section>
</body>
</html>