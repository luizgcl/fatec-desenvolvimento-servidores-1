<?php
    $conteudos = [
        [
            'nome' => 'Aritméticos',
            'link' => 'aritmeticos.php'
        ],
        [
            'nome' => 'Aspas',
            'link' => 'aspas.php'
        ],
        [
            'nome' => 'Atribuição',
            'link' => 'atribuicao.php'
        ],
        [
            'nome' => 'Comentários',
            'link' => 'comentarios.php'
        ],
        [
            'nome' => 'Concatenar',
            'link' => 'concatenar.php'
        ],
        [
            'nome' => 'Constante',
            'link' => 'constante.php'
        ],
        [
            'nome' => 'Escape',
            'link' => 'escape.php'
        ],
        [
            'nome' => 'Get',
            'link' => 'get.php'
        ],
        [
            'nome' => 'Lógico',
            'link' => 'logico.php'
        ],
        [
            'nome' => 'Quebra',
            'link' => 'quebra.php'
        ],
        [
            'nome' => 'Relacionais',
            'link' => 'relacionais.php'
        ],
        [
            'nome' => 'Tipo',
            'link' => 'tipo.php'
        ],
        [
            'nome' => 'Variáveis',
            'link' => 'variaveis.php'
        ]
    ];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luiz | PHP | Aula 02</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/assets/style.css" />
</head>
<body>
    <nav class="bg-white shadow-lg mb-4 p-2">
        <h1>Atributos do PHP</h1>
    </nav>
    <div class="container">
        <a href="../../index.php" class="btn btn-secondary mb-4">
            <i class="bi bi-arrow-left"></i>
            Voltar
        </a>
        
        <table class="table table-bordered rounded">
            <thead>
                <tr>
                    <th>Conteúdo</th>
                    <th>Arquivo</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($conteudos as $conteudo): ?>
                    <tr>
                        <td><?= $conteudo['nome']; ?></td>
                        <td><?= $conteudo['link']; ?></td>
                        <td>
                            <?php echo '<a href="'.$conteudo['link'].'" class="btn btn-primary">'; ?>
                                Acessar
                                <i class="bi bi-arrow-up-right-square"></i>
                            <?php echo "</a>"; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>