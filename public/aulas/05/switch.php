<html>
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
    <nav class="bg-white p-2 mb-4 shadow-lg">
        <h1>Confirmação de pagamento</h1>
    </nav>
    <section class="container">
        <a href="index.php" class="btn btn-secondary mb-4">
            <i class="bi bi-arrow-left"></i>
            Voltar
        </a>
        <div class="bg-white p-2 rounded">
            <?php
                $n = $_GET["num"];
                @$op = $_GET["oper"];
                if ($n == NULL || empty ($op)){
                    echo "<p>Falta alguma informação no formulário.</p><br/>";
                }else{
                    echo "<p>O valor total da compra = $n.</p><br/><br/>";
                    switch ($op){
                        case 1:
                            $r = $n - ($n * 0.10);
                            echo "<p>O valor total da compra à vista e desconto de 10% = $r.</p>";
                            break;
                        case 2:
                            $r = $n + ($n * 0.05);
                            echo "<p>O valor total do pagamento em 30 dias e juros de 5% = $r.</p>";
                            break;
                        case 3:
                            $r = $n + ($n * 0.10);
                            echo "<p>O valor total com pagamento em 60 dias e juros de 10% = $r.</p>";
                            break;
                        default:
                        echo "<p>Não foi selecionada uma forma de pagamento.</p>";        

                    }
                }
            ?>
        </div>
    </section>
</body>
</html>