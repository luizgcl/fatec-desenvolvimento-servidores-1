<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../style.css">
        <title>Contador</title>
    </head>
    <body>
    <section>
    <h3>Mostra os valores</h3>
    <?php
        $initialValue = $_GET["initNumber"];
        $finishValue = $_GET["finishNumber"];
        $incrementOrDecrement = $_GET["count"];
        
        if (!$initialValue || ! $finishValue) echo "<p>O valor inicial ou final não foi informado.</p>";
        else {
            if ($initialValue == $finishValue) echo "O valor inicial deve ser diferente do valor final.";
            else if ($initialValue <= $finishValue) {
                while ($finishValue >= $initialValue) {
                    echo "<p>Valor atual: $initialValue</p>";
                    $initialValue += $incrementOrDecrement;
                }
            }
            else {
                while ($finishValue <= $initialValue) {
                    echo "<p>Valor atual: $initialValue</p>";
                    $initialValue -= $incrementOrDecrement;
                }
            }
        }
    ?>
    <br/>
        <div class="retornar">
        <a href="contador.php">Voltar</a>
        </div>
    </section>
    </body>
</html>
