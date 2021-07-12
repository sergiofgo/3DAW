
<!DOCTYPE html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $conn = new mysqli("localhost","root","","3daw");
    $codBarra = $_GET["codBarra"];
    if ($conn->connect_error) {
        die("Conexão com erro: " . $conn->connect_error);
      }
      else {
        $Inativo = "Inativo";
        $sql = "UPDATE produto SET StatusEstoque = '$Inativo' WHERE Codigo = '$codBarra'"; 
        $result = $conn->query($sql);
        $msg = "Exclusao Efetuada";
        echo json_encode($msg);
      }
}
?>