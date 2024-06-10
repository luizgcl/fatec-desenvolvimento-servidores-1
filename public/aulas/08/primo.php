<html lang="pt-br">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luiz | PHP | Primo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/assets/style.css" />
</head>
<body>
    <nav class="bg-white shadow-lg mb-4 p-2">
        <h1>Numero Primo</h1>
    </nav>
    <section class="container">
        <a href="index.php" class="btn btn-secondary mb-4">
            <i class="bi bi-arrow-left"></i>
            Voltar
        </a>
        <div class="bg-white p-2 rounded">
            <?php
                $n = $_GET["number"];
                echo "<h3>Analisando o número $n </h3>";
                if ($n == NULL) {
                    echo "<p>Volte e digite um número.</p>";
                } else {
                    echo "<p>Valores multiplos:</p>";
                    $mult = 0;
                    for ($c = 1; $c <= $n; $c++) {
                        if ($n % $c == 0) {
                            $mult++;
                            echo "<p>$c </p>";
                        }
                    }
                    echo "<p>Total de múltiplos: $mult </p>";
                    if($mult == 2){
                        echo "<p>Resultado: $n é <b>PRIMO!</b> </p>";
                    } else {
                        echo "<p>Resultado: $n <b>NÃO É PRIMO!</b> </p>";
                    }
                }
            ?>
        </div>
    </section>
</body>
</html>