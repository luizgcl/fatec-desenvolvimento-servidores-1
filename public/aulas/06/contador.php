<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Luiz | PHP | Contador</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="/assets/style.css" />
    </head>
    <body>
        <nav class="bg-white shadow-lg p-2 mb-4">
            <h1>Contador</h1>
        </nav>
        <section class="container">
            <a href="index.php" class="btn btn-secondary mb-4">
                <i class="bi bi-arrow-left"></i>
                Votlar
            </a>
            <div class="bg-white p-2 rounded">
                <form action="contador_mostra.php" method="get">
                    <p>
                        <label for="inicio">Valor inicial:</label>
                        <input type="number" class="form-control" id="inicio" name="initNumber">
                    </p>
                    <p>
                        <label for="final">Valor final:</label>
                        <input type="number" class="form-control" id="final" name="finishNumber">
                    </p>
                    <?php
                        $count = 1;
                        echo "<label for='count'>Valor do incremento/decremento:</label> <select name='count' class='form-control' id='count'>";
                        while ($count <= 5) {
                            echo "<option value='$count'>$count</option>";
                            $count++;
                        }
                        echo "</select>";
                    ?>
                    <footer class="d-flex justify-content-end mt-4">
                        <input type="submit" class="btn btn-success" value="Enviar">
                    </footer>
                </form>
            </div>
        </section>
    </body>
</html>
