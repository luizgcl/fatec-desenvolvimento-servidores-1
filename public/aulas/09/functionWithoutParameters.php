<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Função</title>
</head>
<body>
    <section>
    <?php
        function Welcome() {
            echo "<p align='center'>Olá, bem-vindo!</p>";
        }

        echo "<h3>Chamando a função welcome( )</h3>";
        Welcome();

        echo "<h3>Função welcome( ) dentro do loop</h3>";
        for ($iterator = 0; $iterator <= 5; $iterator++) { 
            Welcome();
        }
    ?>
    <div class="retornar">
            <a href="menu.html">Menu</a>
        </div>
    </section>
</body>
</html>