<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $a = $_POST["a"];
        $b = $_POST["b"];
        $operacao = $_POST["operacao"];
        if ($operacao == "soma") {
             echo $a + $b;
        }
        else {
            if ($operacao == "multiplicacao") {
                echo $a * $b;
           }
           else {
                if ($operacao == "divisao") {
                    if ($b == 0) {
                         echo "valor invalido para o divisor!";
                    }
                    else {
                        echo $a / $b;
                     }
                }
                else {
                    echo $a - $b;
                 }
            }
        }
    }
?>
    
