<!DOCTYPE html>
<html>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luiz | PHP | Aula 03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/assets/style.css" />
</head>
<body>
    <nav class="bg-white p-2 mb-4 shadow-lg">
        <h1>Formulários</h1>
    </nav>
    <div class="container">
        <a href="../../index.php" class="btn btn-secondary mb-4">
            <i class="bi bi-arrow-left"></i>
            Voltar
        </a>
        <div class="row">
            <div class="col-6">
                <div class="bg-white rounded p-2">
                    <h3>Formulário 1</h3>
                    <hr />
                    <div class="opacity-75 mb-1">
                        <i>Digite um valor em decimal, o sistema irá retornar a você a parte inteira do número digitado</i>
                    </div>
                    <form method="get" action="valor.php">
                        <p>Valor: <input type="text" class="form-control" name="v" /></p>
                        <footer class="d-flex justify-content-end">
                            <input type="submit" class="btn btn-success" value="Parte inteira de um número" />
                        </footer>
                    </form>
                </div>
            </div>
            <div class="col-6">
                <div class="bg-white rounded p-2">
                    <h3>Formulário 2</h3>
                    <hr />
                    <form method="get" action="idade.php">
                        <p>Nome: <input type="text" class="form-control" name="nome"/></p>
                        <br/>
                        <p>Ano de nascimento: 
                            <?php  echo '<input name="ano" type="number" class="form-control" min="1900" max="2099" step="1" value="'. date("Y") .'" />'; ?>
                        </p>
                        <br/>
                        <fieldset>
                            <legend>Sexo</legend> 
                            <input type="radio" name="sexo" id="mas" value="masculino"/>
                            <label for="mas">Masculino</label><br/> 
                            <input type="radio" name="sexo" id="fem" value="feminino"/>
                            <label for="fem">Feminino</label><br/> 
                        </fieldset>
                        <footer class="d-flex justify-content-end">
                            <input type="submit" class="btn btn-success" value="Enviar"/>
                        </footer>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>