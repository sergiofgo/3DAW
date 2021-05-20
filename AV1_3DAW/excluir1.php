<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Excluir</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">    
    </head>
    </head>
    <body class = "bg-primary">
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
                                <a class="nav-link active" aria-current="page" href="criar1.php">Criar usuarios</a>
                            </li>
                        </ul>
                    </div>
                </div>   
            </nav>
            <div class="d-flex justify-content-center">
                <form action="excluir2.php" method="post"> 
                    <div class="mb-3">
                        <label for="nome" class="form-label"><h5>Nome da Disciplina:</h5></label>
                        <input type="nome" class="form-control bg-warning" name="nome" id = "nome" aria-describedby="nomelHelp">
                    </div>
                    <button type="submit" class="btn btn-warning" name="op" value="Excluir">Excluir</button>
                </form>
            </div>
    </body>
</html>