<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../style.css">
        <title>Atribuição</title>
    </head>
    <body>
        <section>
        <?php
        echo "<h3>Operadores de atribuição</h3><br/>";
        $var1 = 2;
        echo "<p> $var1 </p>";
        $var1 += 10;
        echo "<p> Variável += 10 = $var1 </p>";
        $var1 *= 10;
        echo "<p> Variável *= 10 = $var1 </p>";
        $var1 /= 10;
        echo "<p> Variável /= 10 = $var1 </p>";
        $var1 -= 10;
        echo "<p> Variável -= 10 = $var1 </p>";
        ?>
        <div class="retornar">
            <a href="index.php">Menu</a>
        </div>
        </section>
    </body>
</html>
