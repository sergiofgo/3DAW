<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Localizando uma disciplina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">    
    </head>
    <body class= "bg-primary">
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
                                <a class="nav-link active" aria-current="page" href="criar1.php">Criar Usuarios</a>
                            </li>
                        </ul>
                    </div>
                </div>   
        </nav>
        <div class="d-flex justify-content-center">
            <form action="criar2.php" method="post">
                <div class="col-auto ">
                    <label for="arquivo" class="form-label"><h5>Nome do Arquivo:</h5></label>
                    <input type="arquivo" class="form-control bg-warning" name="arquivo" id = "arquivo" aria-describedby="arquivolHelp"><br>
                    <select class="form-select bg-warning" name = "op1" value = "resp" aria-label="Default select example">
                        <option selected><h5>A primeira linha do arquivo é composta pelos campos da tabela?</h5></option>
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                    </select><br>
                </div>
                <button type="submit" class="btn btn-warning" name="op2" value="Criar">Criar Usuarios</button>
            </form>
        </div>
    </body>
</html>