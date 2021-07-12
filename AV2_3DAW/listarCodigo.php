<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $conn = new mysqli("localhost","root","","3daw");
    $codBarra = $_GET["codBarra"];
    if ($conn->connect_error) {
        die("Conexão com erro: " . $conn->connect_error);
      }
      else {
        $sql = "SELECT * FROM produto WHERE Codigo = '$codBarra'";
        $result = $conn->query($sql);
        $linha = $result->fetch_assoc();
        $msg = "ID = ".$linha["ID"]."Codigo de Barras = ".$linha["Codigo"]."Nome =".$linha["Nome"]."Fabricante =".$linha["Fabricante"]."Preco =".$linha["Preco"]."Qt Estoque =".$linha["qtdeEstoque"]."Peso =".$linha["Peso"]."Descricao =".$linha["Descricao"]."Link =".$linha["Link"]."Data Inicial =".$linha["DataIncl"]."Status Estoque =".$linha["StatusEstoque"]."Tipo =".$linha["Tipo"]."Categoria =".$linha["Categoria"];
        echo json_encode($msg);
      }
}
?>