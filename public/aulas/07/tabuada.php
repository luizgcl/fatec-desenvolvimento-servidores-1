<html lang="pt-br">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luiz | Tabuada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/assets/style.css" />
</head>
<body>
    <nav class="bg-white shadow-lg mb-4 p-2">
        <h1>Tabuada</h1>
    </nav>
    <section class="container">
        <a href="index.php" class="btn btn-secondary mb-4">
            <i class="bi bi-arrow-left"></i>
            Voltar
        </a>
        <div class="bg-white p-2 rounded">
            <h3>Selecione um número para fazer a tabuada</h3>
            <form action="tabuada_mostra.php" method="get">
                <?php
                    $contador = 1;
                    echo "<label for='contador'>Número:</label> <select id='contador' name='contador' class='form-control'>";
                    while ($contador <= 10) {
                        echo "<option value='$contador'>$contador</option>";
                        $contador++;
                    }
                    echo "</select>";
                ?>
                <footer class="d-flex justify-content-end mt-4">
                    <input type="submit" class="btn btn-success" value="Tabuada">
                </footer>
            </form>
        </div>
    </section>
</body>
</html>