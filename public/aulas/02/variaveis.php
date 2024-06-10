<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../style.css">
        <title>Variáveis</title>
    </head>
    <body>
        <section>
        <?php
        echo "<h3>Variáveis</h3>";
        $var1 = 40;
        $var2 = 45;
        $var3 = "<p>Aprendendo PHP!</p>";
        echo $var1;
        echo "<br/>";
        echo $var2;
        echo "<br/>";
        echo $var3;
        echo "<br/>";
        $var2 = "<p>Variáveis dinâmicas!</p>";
        echo $var2;
        ?>
        <div class="retornar">
            <a href="index.php">Menu</a>
        </div>
        </section>
    </body>
</html>
