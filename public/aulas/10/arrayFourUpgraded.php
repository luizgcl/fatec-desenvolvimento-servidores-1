<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Array</title>
</head>
<body>
    <section>
    <pre>
        <?php

            $customer = array();
            $customer['CompanyName'] = "<p>Jose da Silva - ME</p>";
            $customer['FantasyName'] = "<p>JS Soluções e Sistemas</p>";
            $customer['city'] = "<p>São José do Rio Preto</p>";
            echo "<p>Visalização com print_r </p>";
            print_r($customer);
            echo "<p>Visualização com var_dump</p>";
            var_dump($customer);
            
            echo "<p>Percorrendo um array com foreach </p><br/>";
            foreach ($customer as $value) { 
                echo $value."<br/>";
            }

            echo "<br/>";

            echo "<p>Percorrendo um array com foreach mostrando chave e valor </p><br/>";
            foreach ($customer as $key => $value) { 
                echo "$key: $value <br/>";
            }
        ?>
    </pre>
    <div class="retornar">
            <a href="index.php">Menu</a>
        </div>
    </section>
</body>
</html>