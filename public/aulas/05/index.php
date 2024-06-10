<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luiz | Aula 05</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/assets/style.css" />
</head>

<body>
    <nav class="w-100 bg-white shadow-lg p-2 mb-4">
        <h1>Calculadoras</h1>
    </nav>
    <div class="container">
        <a href="../../index.html" class="btn btn-secondary mb-4">
            <i class="bi bi-arrow-left"></i>
            Voltar
        </a>
        <div class="row">
            <div class="col-6">
                <div class="bg-white p-2 rounded">
                    <h3>Calculadora</h3>
                    <form method="get" action="calculadora.php">
                        <p>
                            <label for="num1">Número 1:</label>
                            <input type="number" class="form-control" name="num1" id="num1" />
                        </p>
                        <p>
                            <label for="num2">Número 2:</label>
                            <input type="number" class="form-control" name="num2" id="num2" />
                        </p>
                        <fieldset>
                            <legend>Operação:</legend>
                            <input type="radio" name="oper" value="1" id="1" /><label for="1">Soma</label><br />
                            <input type="radio" name="oper" value="2" id="2" /><label for="2">Subtração</label><br />
                            <input type="radio" name="oper" value="3" id="3" /><label for="3">Multiplicação</label><br />
                            <input type="radio" name="oper" value="4" id="4" /><label for="4">Divisão</label><br />
                        </fieldset>
                        <footer class="d-flex justify-content-end">
                            <input type="submit" class="btn btn-success" value="Calcular" />
                        </footer>
                    </form>
                </div>
            </div>
            <div class="col-6">
                <div class="bg-white p-2 rounded">
                    <h3>Pagamento de compras</h3>
                    <form method="get" action="switch.php">
                        <p>
                            <label for="num">Informe o valor total</label>
                            <input type="number" class="form-control" name="num" id="num" />
                        </p>
                        <fieldset>
                            <legend>Pagamento:</legend>
                            <input type="radio" name="oper" value="1" id="1" /><label for="1">Pagamento a vista e desconto de 10%</label> <br>
                            <input type="radio" name="oper" value="2" id="2" /><label for="2">Pagamento em 30 dias e juros de 5%</label> <br>
                            <input type="radio" name="oper" value="3" id="3" /><label for="3">Pagamento em 60 dias e juros de 10%</label> <br>
                        </fieldset>
                        <br>
                        <footer class="d-flex justify-content-end">
                            <input type="submit" class="btn btn-success" value="Calcular" />
                        </footer>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>