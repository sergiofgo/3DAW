<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $nomeBanco = "3daw";
    $conn = new mysqli($servidor, $usuario, $senha, $nomeBanco);
    $estado = $_GET["estado"];
    $cidades = array();
    $i = 0;
    if ($conn->connect_error) {
      die("Conexão com erro: " . $conn->connect_error);
    }
    else {
      $sql = "SELECT * FROM estado WHERE uf = '$estado'";
      $result = $conn->query($sql);
      $linha = $result->fetch_assoc();
      $id = $linha["id"];
      $sql = "SELECT * FROM cidade";
      $result = $conn->query($sql);
      while($linha = $result->fetch_assoc()) {
        if ($linha["estado"] == $id) {
          $cidades[$i] = $linha["nome"];
          $i++;
        }
      }
      echo json_encode($cidades);
    } 
}
?>