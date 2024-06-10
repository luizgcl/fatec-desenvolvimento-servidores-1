<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luiz | PHP | Aula 15</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/assets/style.css" />
</head>
    <body>
        <nav class="bg-white shadow-lg mb-4 p-2">
            <h1>Cartão</h1>
        </nav>
        <section class="container">
            <a href="../../index.php" class="btn btn-secondary mb-4">
                <i class="bi bi-arrow-left"></i>
                Voltar
            </a>
            <div class="bg-white rounded p-2">
                <pre>
                    <?php
                        require_once 'CartaoTravel.php';
                        
                        echo "<h3>Criando o objeto user1</h3>";
                        $user1 = new CartaoTravel();
                        $user1->cadastrarCartao("Black");
                        $user1->setNumero(1);
                        $user1->setUsuario("José");
                        $user1->carregarCartao(1000);
                        $user1->tarifaCartao();
                        $user1->usarCartao(550);
                        $user1->encerrarCartao();
                        $user1->usarCartao(500);
                        $user1->encerrarCartao();
                        print_r($user1);
                        
                        echo "<h3>Criando o objeto user2</h3>";
                        $user2 = new CartaoTravel();
                        $user2->cadastrarCartao("Compacto");
                        $user2->setNumero(2);
                        $user2->setUsuario("Maria");
                        $user2->carregarCartao(500);
                        $user2->tarifaCartao();
                        $user2->usarCartao(600);
                        $user2->encerrarCartao();
                        $user2->usarCartao(505);
                        $user2->encerrarCartao();
                        print_r($user2);
                    ?>
                </pre>
            </div>
        </section>
    </body>
</html>
