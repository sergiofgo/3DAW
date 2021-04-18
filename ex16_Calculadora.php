<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
        $a = $_POST [ "a" ];
        $b = $_POST [ "b" ];
        $operacao = $_POST [ "operacao" ];
        $erroMsg = "";
        $printop ="";
        $resultado = null;
        function validarDados ( $a1, &$b1,  $op) {
            echo " op : $op  <br>";
            echo " a: $a1 <br>";
            echo " b: $b1 ";
            $erroMsg1 = "";
            if ($op == "divisao" and $b1 == 0) {
                    $erroMsg1 = "Parametro b nao pode ser zero na operação divisao.";
            }
            if ($op == "exponenciacao" and $a1 == 0 and $b1 < 0) {
                    $erroMsg1 = "Nao e permitido expoente ser 0 e a potencia b ser negativa.";
            }
            if ($op == "raiz"){
                if ($b1 == "" and is_numeric($a1)) {
                    $b1 = $a1;
                }
                $a1 = 0;
                if ($b1 < 0) {
                    $erroMsg1 = "Nao e permitido valores negativos de b para a operacao raiz quadrada";
                }
            }
            if ($op == "inverso") {
                if ($b1 == "" and is_numeric($a1)) {
                    $b1 = $a1;
                    echo $b1;
                }
                $a1 = 0;
                if ($b1 == 0) {
                    $erroMsg1 = "Nao e permitido valores nulo de b para a operacao inverso multiplicativo";
                }
            }
            if ($op !== "multiplicacao" && $op !== "divisao" && $op !== "soma" && $op !== "subtracao" && $op !== "exponenciacao" && $op !== "raiz" && $op !== "inverso" && $op !== "percentual")  {
                    $erroMsg1 = "Operacao invalida";
            }
            if (!is_numeric($b1)) {
                $erroMsg1 = "Parametro b não é numerico";
            }
            if (!is_numeric($a1)) {
                    $erroMsg1 = $erroMsg1." Parametro a não é numerico";
            }
            return $erroMsg1;
        }
        function percentual ($a1, $b1) {
            return $a1*($b1/100);
        }
        function inverso ($b1) {
            return 1/$b1;
        }
        function raiz ($b1) {
            return sqrt ($b1);
         }
        function somar ($a1, $b1) {
            return $a1 + $b1;
        }
        function multiplicar ($a1, $b1) {
            return $a1 * $b1;
        }
        function dividir ($a1,  $b1) {
            return $a1 / $b1;
        }
        function subtrair ( $a1,  $b1) {
            return $a1 - $b1;
        }
        function exponenciacao ($a1, $a2) {
            return $a1**$a2;
        }
        $erroMsg = validarDados($a, $b, $operacao);
        if ($erroMsg == "") {
            if ($operacao == "soma") {
               $resultado = somar($a, $b);
               $printOp = "+";
            }
            if ($operacao == "divisao") {
            $resultado = dividir($a, $b);
            $printOp = "/";
            }
            if ($operacao == "multiplicacao") {
                $resultado = multiplicar($a, $b);
                $printOp = "*";
            }
            if ($operacao == "subtracao") {
                $resultado = subtrair($a, $b);
                $printOp = "-";
            }
            if ($operacao == "exponenciacao") {
                $resultado = exponenciacao ($a, $b);
                $printOp = "^";
            }
            if ($operacao == "raiz") {
                $resultado = raiz ($b);
                $printOp = "v";
            }
            if ($operacao == "inverso") {
                $resultado = inverso ($b);
                $printOp = "1/";
            }
            if ($operacao == "percentual") {
                $resultado = percentual ($a, $b);
                $printOp = "%";
            }
       }
    }
?>
<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>Calculadora</title>
        <meta charset = "utf-8">
    </head>
    <body>
        <h1>Calculadora</h1>
        <form action= "ex16_Calculadora.php" method = "post">
            <input type ="number" name = "a">
            <br>
            <input type ="number" name = "b">
            <br><br>
            <br><br>
            <select name = "operacao">
                <option value="">Selecione a Operação</option>
                <option  name = "soma" value = "soma">Soma</option>
                <option  value = "subtracao" name = "subtracao">Subtração</option>
                <option  value = "multiplicacao" name = "multiplicacao">Multiplicação</option>
                <option  value ="divisao" name ="divisao">Divisao</option>
                <option  value ="exponenciacao"name ="exponenciacao">Exponenciacao</option>
                <option  value ="raiz" name ="raiz">Raiz Quadrada</option>
                <option value ="inverso" name ="inverso">Inverso Multiplicativo</option>
                <option value ="percentual" name ="percentual">Percentual</option>
            </select>
            <input type ="submit" value = "enviar">
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo "<br>";
                if ($resultado !==null) {
                    if ($operacao == "inverso" || $operacao == "raiz"){
                        echo "Resultado: $printOp $b = $resultado";
                    }
                    else {
                        
                        echo "Resultado: $a $printOp $b = $resultado";
                    }
                }
                else {
                    echo $erroMsg;
                }
            }
        ?>
    </body>
</html>