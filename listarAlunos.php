<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listar</title>
</head>
<body>
<h3>Leitura DB</h3>
<form action="listarAlunos.php" method="post">
    <input type="submit" name="op" value="Listar Alunos" >
</form>
</body>
</html>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $nomeBanco = "faeterj3dawnoite";
        $conn = new mysqli($servidor, $usuario, $senha, $nomeBanco);
        $op= $_POST["op"];
        if ($conn->connect_error) {
            die("Conexão com erro: " . $conn->connect_error);
        }
        else {
            if ($op == "Listar Alunos") {
                $sql = "SELECT * FROM alunos";
                $result = $conn->query($sql);
                echo "<table border='1'>";
                echo "<tr>";
                echo "<th>id</th><th>nome</th><th>email</th><th>matricula</th>";
                while ($linha = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td> " . $linha["ID"] . "</td>";
                    echo "<br>";
                    echo "<td> " . $linha["Nome"] . "</td>";
                    echo "<br>";
                    echo "<td> " . $linha["Email"] . "</td>";
                    echo "<br>";
                    echo "<td> " . $linha["Matricula"] . "</td>";
                    echo "<br>";
                    echo "<tr>";
                }
                echo "</table>";
            }
        }
    }
?>
