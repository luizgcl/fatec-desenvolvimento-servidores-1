<html>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luiz | Calculadora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/assets/style.css" />
</head>
<body>
    <nav class="bg-white shadow-lg mb-4 p-2">
        <h1>Confirmação de pagamento</h1>
    </nav>
    <section class="container">
        <a href="index.php" class="btn btn-secondary mb-4">
            <i class="bi bi-arrow-left"></i>
            Voltar
        </a>
        <div class="bg-white p-2 rounded">
            <?php
                $n1 = $_GET["num1"];
                $n2 = $_GET["num2"];
                @$op = $_GET["oper"];
                if ($n1 == NULL OR $n2 == NULL OR empty ($op)){
                    echo "<p>Falta alguma informação no formulário.</p><br/>";
                }else{
                    echo "<p>Os números digitados foram $n1 e $n2.<p><br/><br/>";
                    switch ($op){
                        case 1:
                            $r = $n1 + $n2;
                            echo "<p>O resultado da soma = $r.</p>";
                            break;
                        case 2:
                            $r = $n1 - $n2;
                            echo "<p>O resultado da subtração = $r.</p>";
                            break;
                        case 3:
                            $r = $n1 * $n2;
                            echo "<p>O resultado da multiplicação = $r.</p>";
                            break;
                        case 4:
                            $r = $n1 / $n2;
                            echo "<p>O resultado da divisão = $r.</p>";
                            break;
                        default:
                        echo "<p>Não foi selecionada uma operação.</p>";        

                    }
                }
            ?>
        </div>
    </section>
</body>
</html>