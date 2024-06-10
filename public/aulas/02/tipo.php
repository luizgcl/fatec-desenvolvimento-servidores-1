<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../style.css">
        <title>Tipo</title>
    </head>
    <body>
        <section>
        <?php
        echo "<h3>Tipo de variável</h3>";
        $var1 = 10;
        $var2 = 35.89;
        $var3 = "PHP Hypertext Preprocessor";
        $var4 = false;
        $var5 = null;
        echo '<br/><p>$var1 é do tipo ' . gettype($var1) . "</p>";
        echo '<p>$var2 é do tipo ' . gettype($var2) . "</p>";
        echo '<p>$var3 é do tipo ' . gettype($var3) . "</p>";
        echo '<p>$var4 é do tipo ' . gettype($var4) . "</p>";
        echo '<p>$var5 é do tipo ' . gettype($var5) . "</p>";
        ?>
        <div class="retornar">
            <a href="index.php">Menu</a>
        </div>
        </section>
    </body>
</html>
