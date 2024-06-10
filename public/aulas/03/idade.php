<!DOCTYPE html>
<html>
<head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Luiz | Aula 03 | Idade</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="/assets/style.css" />
    </head>
    <body>
        <nav class="shadow-lg bg-white p-2 mb-4">
            <h3>Recebendo dados do Formulário</h3>
        </nav>
        <section class="container">
            <a href="formulario.php" class="btn btn-secondary mb-4">
                <i class="bi bi-arrow-left"></i>
                Voltar
            </a>
            <div class="bg-white p-2 rounded">
                <?php
                    $nome = !empty($_GET["nome"]) ? $_GET["nome"] : "[campo vazio]";
                    $sexo = !empty($_GET["sexo"]) ? $_GET["sexo"] : "[campo vazio]";
                    $ano = !empty($_GET["ano"]) ? $_GET["ano"] : "[campo vazio]";
                    $idade = $ano != "[campo vazio]" ? date("Y")-$ano : "[campo vazio]";

                    echo "<p>Nome: <input class='form-control' value='$nome' disabled> </p>";
                    echo "<p>Sexo: <input class='form-control' value='$sexo' disabled> </p>";
                    echo "<p>Idade: <input class='form-control' value='$idade' disabled> </p>";
                ?>
            </div>
        </section>
    </body>
</html>
    

            

