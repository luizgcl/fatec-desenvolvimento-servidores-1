<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../style.css">
        <title>Relacionais</title>
    </head>
    <body>
        <section>
        <?php
        echo "<h3>Operadores relacionais</h3>";
        $num1 = 5;
        $num2 = 3;
        $tipo = "s";
        $r = $tipo == "s" ? $num1 + $num2 : $num1 * $num2;
        echo "<p>O resultado = $r</p>";
        ?>
        <div class="retornar">
            <a href="index.php">Menu</a>
        </div>
        </section>
    </body>
</html>
