<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $conn = new mysqli("localhost","root","","3daw");
        $codigo = array();
        $i = 0;
        if ($conn->connect_error) {
        die("Conexão com erro: " . $conn->connect_error);
        }
        else {
        $sql = "SELECT * FROM codigo";
        $result = $conn->query($sql);
        $linha = $result->fetch_assoc();
        while($linha = $result->fetch_assoc()) {
            $codigo[$i] = $linha["Numero"];
            $i++;
        } 
        echo json_encode($codigo);
        } 
    }
?>