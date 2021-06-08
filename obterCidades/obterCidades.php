<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $conn = new mysqli("localhost","root","","3daw");
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
      $sql = "SELECT * FROM cidade WHERE estado = '$id'";
      $result = $conn->query($sql);
      while($linha = $result->fetch_assoc()) {
          $cidades[$i] = $linha["nome"];
          $i++;
      }
      echo json_encode($cidades);
    } 
}
?>