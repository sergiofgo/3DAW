<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $conn = new mysqli("localhost","root","","3daw");
    $nome = $_GET["nome"];
    $email = $_GET["email"];
    $cpf1 = $_GET["cpf1"];
    $cpf = $_GET["cpf"];
    $mat = $_GET["matricula"];
    $uf = $_GET["uf"];
    $cidade = $_GET["cidades"];
    $erro = "";
    if ($conn->connect_error) {
      die("Conexão com erro: " . $conn->connect_error);
    }
    else {
        if ($erro == "") {
            $sql = "UPDATE alunos SET Nome = '$nome', Email = '$email', Cpf = '$cpf', Matricula = '$mat', Estado = '$uf', Cidade = '$cidade'  WHERE Cpf = '$cpf1'";                       
            $result = $conn->query($sql);
            $sql1 = "UPDATE alunos SET Cpf = '$cpf'  WHERE Matricula = '$mat'"; 
            $result = $conn->query($sql1);                      
            echo json_encode("Aluno $nome inserido com Sucesso");
        }
    }
    function ValidarCpfBanco($pCpf, $conn) {
        $sqlCpf = "SELECT Cpf FROM alunos WHERE Cpf = '$pCpf'";
        $result = $conn->query($sqlCpf);
        if ($result->num_rows == 0) {
            $erro = "Problema no CPF";
        }
    }
    function ValidarNome($nome) {
        if ($nome == "") {
            $erro = "Problema no nome";
        }
    }
    function ValidarMatricula($matricula) {
        if(!is_numeric($matricula)) {
            $erro = "Problema no matricula";
        }
    }
    function ValidarUF ($uf) {
        if (ctype_digit($uf)) {
            $erro = "Problema na UF";
        }
    }
    function ValidarCpf($cpf) {
        $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
        if (strlen($cpf) != 11) {
            return 1;
        }
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return 1;
        }
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return 1;
            }
        }
        return 0;
    }
    function ValidarEmail($email) {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erro = "Problema no EMAIL";
        }
    }
}
?>





