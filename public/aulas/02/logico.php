<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../style.css">
        <title>Lógico</title>
    </head>
    <body>
        <section>
        <?php
        echo "<h3>Operadores lógicos</h3>";
        $ano = 2009;
        $idade = 2024 - $ano;
        echo "<p>Quem nasceu em $ano tem idade de $idade anos.</p><br/>";
        $tipo = ($idade >= 18 && $idade <65) ? "é obrigatório" : "não é obrigatório";
        echo "<br><p>Seu voto $tipo</p>";
        ?>
        <div class="retornar">
            <a href="index.php">Menu</a>
        </div>
        </section>
    </body>
</html>
