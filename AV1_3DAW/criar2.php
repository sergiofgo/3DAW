<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Localizando uma disciplina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">    
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="menu.php">Menu</a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="listar1.php">Listar Disciplinas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="inserir1.php"> Inserir Disciplina</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="excluir1.php">Excluir Disciplina</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="localizar1.php">Localizar Disciplina</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="alterar1.php">Alterar Disciplina</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="criar1.php">Criar Usuarios</a>
                            </li>
                        </ul>
                    </div>
                </div>   
        </nav>
    </body>
</html>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $nomeBanco = "av1_3daw";
        $conn = new mysqli($servidor, $usuario, $senha, $nomeBanco);
        $op2 = $_POST["op2"];
        if ($conn->connect_error) {
            die("Conexão com erro: " . $conn->connect_error);
        }
        else {
            if ($op2 == "Criar") {
                $op1 = $_POST["op1"];
                $arq = $_POST["arquivo"];
                $arquivo = fopen ($arq, 'r') or die ("Nao foi possivel abrir o arquivo.");
                if($op1 == "sim"){
                    $linha = fgets($arquivo); 
                }
                while(!feof($arquivo)) {
                    $linha = fgets($arquivo);
                    $vetor = array ();
                    $vetor = explode(";", $linha);
                    $sql = "Insert into usuarios VALUES ('$vetor[0]', '$vetor[1]', '$vetor[2]', '$vetor[3]', '$vetor[4]')";
                    $result = $conn->query($sql);
                }
                fclose($arquivo);
                echo "Usuarios incorporados a tabela";
            }
            else {
                echo "Operação não encontrada";
            }
        }
    }
?>

