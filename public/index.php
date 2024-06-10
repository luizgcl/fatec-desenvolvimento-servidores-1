<?php
$aulas = [
    '01' => [
        'descricao' => 'Primeira aula, hello world',
        'caminho' => 'aulas/01/index.php'
    ],
    '02' => [
        'descricao' => 'Segunda aula, atributos',
        'caminho' => 'aulas/02/index.php'
    ],
    '03' => [
        'descricao' => 'Terceira aula, formulario',
        'caminho' => 'aulas/03/formulario.php'
    ],
    '04' => [
        'descricao' => 'Quarta aula, if e else',
        'caminho' => 'aulas/04/index.php'
    ],
    '05' => [
        'descricao' => 'Quinta aula, calculadora',
        'caminho' => 'aulas/05/index.php'
    ],
    '06' => [
        'descricao' => 'Sexta aula, while',
        'caminho' => 'aulas/06/index.php'
    ],
    '07' => [
        'descricao' => 'Sétima aula, do while',
        'caminho' => 'aulas/07/index.php'
    ],
    '08' => [
        'descricao' => 'Oitava aula, número primo',
        'caminho' => 'aulas/08/index.php'
    ],
    '09' => [
        'descricao' => 'Nona aula, funções',
        'caminho' => 'aulas/09/index.php'
    ],
    '10' => [
        'descricao' => 'Décima aula, arrays',
        'caminho' => 'aulas/10/index.php'
    ],
    '11' => [
        'descricao' => 'Décima primeira aula, formulario dinamico',
        'caminho' => 'aulas/11/exec1.php'
    ],
    '12' => [
        'descricao' => 'Décima segunda aula, classe',
        'caminho' => 'aulas/12/index.php'
    ],
    '13' => [
        'descricao' => 'Décima terceira aula, encapsulamento',
        'caminho' => 'aulas/13/index.php'
    ],
    '14' => [
        'descricao' => 'Décima quarta aula, métodos especiais (acessores)',
        'caminho' => 'aulas/14/index.php'
    ],
    '15' => [
        'descricao' => 'Décima quinta aula, cartão travel',
        'caminho' => 'aulas/15/mostrarCartao.php'
    ],
    // '16' => [
    //     'descricao' => 'Décima sexta aula, formulario',
    //     'caminho' => 'aulas/03/formulario.php'
    // ]
];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luiz | PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/assets/style.css" />
</head>

<body>
    <nav class="bg-white shadow-lg p-2 mb-4">
        <a href="#" class="link-unstyled">
            <h1>Aulas de PHP</h1>
        </a>
    </nav>
    <div class="container">
        <div class="row">
            <?php foreach ($aulas as $numero => $aula) : ?>
                <div class="col-lg-3 col-md-6 col-sm-12 my-2">
                    <div class="card">
                        <div class="card-header">
                            <h4>Aula <?= $numero; ?></h4>
                        </div>
                        <div class="card-body">
                            <div class="text-wrap"><?= $aula['descricao']; ?></div>
                        </div>
                        <div class="card-footer d-flex justify-content-end">
                            <?php
                            echo '<a href="' . $aula['caminho'] . '" class="btn btn-primary">';
                            ?>
                            Acessar
                            <i class="bi bi-arrow-up-right-square"></i>
                            <?php
                            echo '</a>';
                            ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>