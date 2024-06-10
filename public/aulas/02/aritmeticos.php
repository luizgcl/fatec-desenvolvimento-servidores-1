<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../style.css">
        <title>Aritméticos</title>
    </head>
    <body>
        <section>
        <?php
        echo "<h3>Operadores aritméticos</h3> <br/><br/>";
        $n1 = 3;
        $n2 = 2;
        echo "<p>A soma de $n1 + $n2 =  ". ($n1 + $n2) . "</p>";
        echo "<p> A subtração de $n1 - $n2 = " . ($n1 - $n2) . "</p>";
        echo "<p> A multiplicação de $n1 * $n2 = " . ($n1 * $n2) . "</p>";
        echo "<p> A divisão de $n1 / $n2 = " . ($n1 / $n2) . "<p/>";
        echo "<p> O módulo de $n1 % $n2 = " . ($n1 % $n2) . "</p>";
        $n3 = "10";
        // Em expressões, o PHP converte automaticamente os tipos.
        echo "<p> A soma de $n1 + $n3 = " . ($n1 + $n3) . "</p>";
        ?>
        <div class="retornar">
            <a href="index.php">Menu</a>
        </div>
        </section>
    </body>
</html>
