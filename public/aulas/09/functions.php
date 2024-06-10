<?php
    function textFunction() {
        echo "<p>Essa função mostra o texto com argumento.</p>";
    }

    function showValue($value) {
        echo "<p>Essa função mostra o valor com argumento = $value</p>";
    }

    function sumFiveNumbers($number1, $number2, $number3, $number4, $number5) {
        return $number1 + $number2 + $number3 + $number4 + $number5;
    }

    function subtractThreeNumbers($number1, $number2, $number3) {
        return $number1 - $number2 - $number3;
    }

    function multiplyFourNumbers($number1, $number2, $number3, $number4) {
        return $number1 * $number2 * $number3 * $number4;
    }

    function secondDegreeFunction($valueOfA, $valueOfB, $valueOfC) {
        if ($valueOfA != 0) {
            $delta = $valueOfB * $valueOfB - 4 * $valueOfA * $valueOfC;

            if ($delta > 0) {
                $root1 = (-$valueOfB + sqrt($delta) ) / (2 * $valueOfA);
                $root2 = (-$valueOfB - sqrt($delta) ) / (2 * $valueOfA);
            }

            // elseif ($delta == 0) $root1 = $root2 = -($valueOfB)/(2*$valueOfA);
            elseif ($delta == 0) $root1 = $root2;
            
            else {
                $real = -$valueOfB/(2*$valueOfA);
                $img =  sqrt(-$delta)/(2*$valueOfA);
            
                $root1 = "$real +i $img";
                $root2 = "$real -i $img";
            }
        }
        else echo "<p>Equação inexistente</p>";   
        echo "<p>Raiz 1: $root1</p> <br />";
        echo "<p>Raiz 2: $root2</p> <br />";
    }
?>