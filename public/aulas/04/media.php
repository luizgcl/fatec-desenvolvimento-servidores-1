<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luiz | Média</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/assets/style.css" />
</head>
<body>
    <?php
        $estudante = $_GET["nameStudentName"];
    ?>
    <nav class="bg-white shadow-lg mb-4 p-2">
        <h1>Média de <?= $estudante; ?></h1>
    </nav>
    <section class="container">
        <?php if (!$estudante) echo "<div class='alert alert-danger' role='alert'>O nome do estudante deve ser informado.</div>"; ?>
        <a href="index.php" class="btn btn-secondary mt-2 mb-4">
            <i class="bi bi-arrow-left"></i>
            Voltar
        </a>
        <?php
            $notas = array(
                $_GET["studentNote1Name"],
                $_GET["studentNote2Name"],
                $_GET["studentNote3Name"],
                $_GET["studentNote4Name"]
            );
    
            $numeroDeNotas = 0;
            $media = 0;
            $nota = true;
    
            foreach ($notas as $note) !$note ? $nota = false : $nota = true;
        ?>
        <?php if ($nota): ?>
            <div class="bg-white p-2 rounded">
                <?php
                        foreach ($notas as $note) {
                            $numeroDeNotas++;
                            $media += $note;
                        }
                
                        $media /= $numeroDeNotas;
                
                        if ($media === null) echo "<p>Go back and type your age.</p>";
                        
                        elseif ($media >= 6) {
                            echo "<p>O estudante $estudante obteve uma média de $media.</p><br/>";
                            echo "<p>$estudante está aprovado.</p><br/>";
                        }
                        else {
                            echo "<p>O estudante $estudante obteve uma média de $media.</p><br/>";
                            echo "<p>$estudante não está aprovado.</p><br/>";
                        }
                ?>
            </div>
        <?php endif; ?>
    </section>
</body>
</html>