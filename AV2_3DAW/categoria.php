<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $conn = new mysqli("localhost","root","","3daw");
        $tipos = array();
        $i = 0;
        if ($conn->connect_error) {
        die("Conexão com erro: " . $conn->connect_error);
        }
        else {
        $sql = "SELECT * FROM categoria";
        $result = $conn->query($sql);
        $linha = $result->fetch_assoc();
        while($linha = $result->fetch_assoc()) {
            $tipos[$i] = $linha["Nome"];
            $i++;
        } 
        echo json_encode($tipos);
        } 
    }
?>