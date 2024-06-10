<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../style.css">
        <title>Concatenar</title>
    </head>
    <body>
        <section>
        <?php
        echo "<h3>Concatenar</h3>";
        $texto1 = "PHP significa...";
        $texto2 = " Hypertext Preprocessor";
        echo "<br/><p>Variável 1 = $texto1 </p><br/>";
        echo "<br/><p>Variável 2 = $texto2 </p><br/>";
        echo "<p> Concatenado = " . ($texto1 . $texto2) . "<p/>";
        ?>
        <div class="retornar">
            <a href="index.php">Menu</a>
        </div>
        </section>
    </body>
</html>
