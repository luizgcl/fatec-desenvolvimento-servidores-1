<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Função</title>
</head>
<body>
    <section>
    <?php
        function sum() {
            $value = func_get_args();
            $qtdeParams = func_num_args();
            $sum = 0;

            for ($iterator=0; $iterator < $qtdeParams; $iterator++) $sum += $value[$iterator];
            return $sum;
        }

        echo "<h3>Soma da função com múltiplos parâmetros</h3>";
        $result = sum(1,2,3,5);
        echo "<p>A soma é = $result</p>";
    ?>
    <div class="retornar">
            <a href="menu.html">Menu</a>
        </div>
    </section>
</body> 
</html>