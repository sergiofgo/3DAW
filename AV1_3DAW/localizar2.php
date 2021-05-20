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
        $op = $_POST["op"];
        if ($conn->connect_error) {
            die("Conexão com erro: " . $conn->connect_error);
        }
        else {
            if ($op == "Localizar") {
                $nome = $_POST["nome"];
                if (ctype_alpha($nome)) {
                    $sql = "SELECT * FROM disciplina WHERE Nome = '$nome'";
                    $result = $conn->query($sql);
                    $linha = $result->fetch_assoc();
                    echo '<table class="table">';
                    echo "<thead>";
                    echo "<tr>";
                    echo'<th scope="col">Id</th>';
                    echo '<th scope="col">Nome</th>';
                    echo'<th scope="col">Periodo</th>';
                    echo'<th scope="col">idPreRequisito</th>';
                    echo'<th scope="col">Creditos </th>';
                    echo"</tr>";
                    echo"</thead>";
                    echo "<tbody>";
                    echo "<tr>";
                    echo '<th scope = "row"> ' . $linha["ID"] . "</th>";
                    echo "<br>";
                    echo "<td> " . $linha["Nome"] . "</td>";
                    echo "<br>";
                    echo "<td> " . $linha["Periodo"] . "</td>";
                    echo "<br>";
                    echo "<td> " . $linha["idPreRequisito"] . "</td>";
                    echo "<br>";
                    echo "<td> " . $linha["Creditos"] . "</td>";
                    echo "</tr>";
                    echo "</tbody>";
                    echo "</table>";
                }
                else {
                    echo "Nome de disciplina não válido";
                }
            }
        }
    }
?>