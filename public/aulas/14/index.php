<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luiz | PHP | Aula 14</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/assets/style.css" />
</head>

<body>
    <nav class="bg-white shadow-lg mb-4 p-2">
        <h1>Veiculo</h1>
    </nav>
    <section class="container">
        <a href="../../index.php" class="btn btn-secondary mb-4">
            <i class="bi bi-arrow-left"></i>
            Voltar
        </a>
        <div class="bg-white p-2 rounded">
            <pre>
                    <?php
                    require_once 'Veiculo.php';

                    $carro = new Veiculo("Gol", 2015, true);

                    echo "<h3>Mostrando o objeto carro com var_dump</h3>";
                    var_dump($carro);

                    echo '<h3>Mostrando o objeto carro com print_r</h3>';
                    print_r($carro);

                    echo '<h3>Mostrando os métodos</h3>';

                    $carro->acelerar();
                    $carro->desligar();
                    $carro->acelerar();
                    $carro->ligar();
                    $carro->acelerar();

                    echo "<h3>Mostrando o objeto carro com echo</h3>";
                    echo "<p>Eu tenho um carro modelo {$carro->getNome()}, cor {$carro->getCor()},</p>"
                        . "<p>{$carro->getAno()} e o estado dele {$carro->getBotao()}</p>";

                    $onibus = new Veiculo("Mercedes", 2010, false);

                    echo "<h3>Mostrando o objeto onibus com var_dump</h3>";
                    var_dump($onibus);
                    ?>
                </pre>
        </div>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>