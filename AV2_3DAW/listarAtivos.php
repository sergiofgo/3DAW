<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <title>Menu</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <body class= "bg-white">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="Menu.html">Menu</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                             <a class="nav-link active" aria-current="page" href="listarAtivos.php">Listar Ativos</a>
                        </li>
                        <li class="nav-item">
                             <a class="nav-link active" aria-current="page" href="listarCodigo.html"> Listar Codigos</a>
                        </li>
                        <li class="nav-item">
                             <a class="nav-link active" aria-current="page" href="detalhesProduto.html">Detalhes Produto</a>
                        </li>
                        <li class="nav-item">
                             <a class="nav-link active" aria-current="page" href="incluir.html">Incluir Produto</a>
                        </li>
                        <li class="nav-item">
                             <a class="nav-link active" aria-current="page" href="alterar.html">Alterar Produto</a>
                        </li>
                        <li class="nav-item">
                             <a class="nav-link active" aria-current="page" href="excluir.html">ExluirUsuarios</a>
                        </li>
                    </ul>
                </div>
            </div>   
        </nav>
    </body>
</html>
<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $nomeBanco = "3daw";
    $conn = new mysqli($servidor, $usuario, $senha, $nomeBanco);
    if ($conn->connect_error) {
        die("Conexão com erro: ".$conn->connect_error);
    }
    else {
        $sql = "SELECT * FROM produto WHERE StatusEstoque = 'Ativo' ";
        $result = $conn->query($sql);
        echo '<table class="table">';
        echo "<thead>";
        echo "<tr>";
        echo'<th scope="col">Codigo de Barra</th>';
        echo '<th scope="col">Nome</th>';
        echo'<th scope="col">Categoria</th>';
        echo'<th scope="col">Preco de Venda</th>';
        echo'<th scope="col">Qt Estoque</th>';
        echo"</tr>";
        echo"</thead>";
        echo "<tbody>";
        while ($linha = $result->fetch_assoc()) {
            echo "<tr>";
            echo '<th scope = "row"> ' . $linha["Codigo"] . "</th>";
            echo "<br>";
            echo "<td> " ."<a href = 'listarCodigo.php?codBarra={$linha["Codigo"]}'>{$linha["Nome"]}</a>". "</td>";
            echo "<br>";
            echo "<td> " . $linha["Categoria"] . "</td>";
            echo "<br>";
            echo "<td> " . $linha["Preco"] . "</td>";
            echo "<br>";
            echo "<td> " . $linha["qtdeEstoque"] . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    }
?>