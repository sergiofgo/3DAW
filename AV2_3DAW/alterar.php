<?php
$erro = "";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $conn = new mysqli("localhost","root","","3daw");
    $oldCod = $_GET["oldCod"];
    $codBarra = $_GET["codBarra"];
    $nome = $_GET["nome"];
    $fab = $_GET["fab"];
    $preco = $_GET["preco"];
    $qtEst = $_GET["qtEst"];
    $peso= $_GET["peso"];
    $desc= $_GET["desc"];
    $link = $_GET["link"];
    $data= $_GET["data"];
    $status= $_GET["status"];
    $tipo = $_GET["tipo"];
    $categoria = $_GET["categoria"];
    if ($conn->connect_error) {
      die("Conexão com erro: " . $conn->connect_error);
    }
    else {
        validarProduto ($codBarra,$nome,$fab,$preco,$qtEst,$peso,$desc, $link,$data,$status,$tipo,$categoria);
        if ($erro =="") {
            $sql = "SELECT * FROM produto WHERE Codigo = '$oldCod'";
            $result = $conn->query($sql);
            $linha = $result->fetch_assoc();
            $linha1 = $linha["ID"];
            $sql1 = "UPDATE produto SET  Codigo ='$codBarra', Nome = '$nome',  Fabricante = '$fab ', Preco = '$preco', qtdeEstoque = '$qtEst', Peso = '$peso', Descricao = '$desc', Link = '$link', DataIncl = '$data',StatusEstoque = '$status', Tipo ='$tipo', Categoria = '$categoria' WHERE ID ='$linha1' ";
            $result = $conn->query($sql1);  
            $msg = "Alteracao Realizada com Sucesso";                  
            echo json_encode();
        }
    }  
}
    function validarProduto ($codBarra,$nome,$fab,$preco,$qtEst,$peso,$desc, $link,$data,$status,$tipo,$categoria) {
        if(!ctype_digit($oldCod) || $oldCod <= 0){
            $erro = "Codigo de Barras Invalido";
          }
        if(!ctype_digit($codBarra) || $codBarra <= 0){
          $erro = "Codigo de Barras Invalido";
        }
        if(!is_numeric($preco) || $preco <= 0){
          $erro = "Preco Invalido";
        }
        if(!is_numeric($peso) || $peso <= 0){
          $erro = "Peso Invalido";
        }
        if(!is_numeric($qtEst) || $qtEst <= 0){
          $erro = "Quantidade Estoque Invalida";
        }
        if($status !== "Ativo" && $status !== "Ativo"){
          $erro = "Status de Estoque Invalido";
        }
        if(!ctype_alpha($nome)){
          $erro = "Nome Invalido";
        }
        if(!ctype_alpha($fab)){
          $erro = "Fabricante Invalido";
        }
        if(!ctype_alpha($desc)){
          $erro = "Descrição Invalida";
        }
        if(!ctype_alpha($status)){
          $erro = "Status de Estoque Invalido";
        }
        if(!ctype_alpha($tipo)){
          $erro = "Tipo Invalido";
        }
        if(!ctype_alpha($categoria)){
          $erro = "Categoria Invalida";
        }
        if (!validaData($data)){
          $erro = "Data Invalida";
        }
        if(!validaLink($link)) {
          $erro = "Link Invalido";
        }
      }
      function validaData($dat) {
          $data = explode ("/","$dat");
          $d = $data[0];
          $m = $data[1];
          $a = $data[2];
          if(!checkdate($m,$d,$a)) {
              return false;
          }
          else {
            return true;
          }
      }
      function validaLink($link){
        if (filter_var($link,FILTER_VALIDATE_URL)===FALSE){
          return false;
        }
        else {
          return true;
        }
      }
      ?>