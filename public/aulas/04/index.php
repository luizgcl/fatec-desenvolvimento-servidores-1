<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luiz | PHP | Aula 04</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/assets/style.css" />
</head>
<body>
    <nav class="w-100 bg-white shadow-lg p-2 mb-4">
        <h1>If e Else</h1>
    </nav>
    <section class="container">
        <a href="../../index.php" class="btn btn-secondary mb-4">
            <i class="bi bi-arrow-left"></i>
            Voltar
        </a>
        
        <div class="row">
            <div class="col-6">
                <div class="bg-white p-2 rounded">
                    <h3>Informe sua idade</h3>
                     <br/>
                    <form method="get" action="ifElse.php">
                        <label for="age">Idade:</label>
                        <input type="number" class="form-control" name="ageName" id="age"><br/>
                        <footer class="d-flex justify-content-end">
                            <input type="submit" class="btn btn-success" value="Verificar"/>
                        </footer>
                    </form>
                </div>
            </div>
            <div class="col-6">
                <div class="bg-white p-2 rounded">
                    <h3>Média</h3>
                    <form action="media.php" method="get">
                        <p>
                            <label for="student">Estudante:</label>
                            <input class="form-control" type="text" name="nameStudentName" id="student" placeholder="Nome do estudante" />
                        </p>
                        <p>
                            <label for="note">Nota 1:</label>
                            <input class="form-control" type="number" name="studentNote1Name" id="note"/>
                        </p>
                        <p>
                            <label for="note2">Nota 2:</label>
                            <input class="form-control" type="number" name="studentNote2Name" id="note2"/>
                        </p>
                        <p>
                            <label for="note3">Nota 3:</label>
                            <input class="form-control" type="number" name="studentNote3Name" id="note3"/>
                        </p>
                        <p>
                            <label for="note4">Nota 4:</label>
                            <input class="form-control" type="number" name="studentNote4Name" id="note4"/>
                        </p>
                        <footer class="d-flex justify-content-end">
                            <input type="submit" class="btn btn-success" value="Enviar dados">
                        </footer>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>