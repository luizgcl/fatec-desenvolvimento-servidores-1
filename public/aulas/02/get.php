<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../style.css">
        <title>Get</title>
    </head>
    <body>
        <section>
        <?php
            echo "<h3>Personalizando os valores inseridos</h3>";
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            echo "<p>A soma = " . ($n1 + $n2) . "</p>";
        ?>
        <div class="retornar">
            <a href="index.php">Menu</a>
        </div>
        </section>
    </body>
</html>
