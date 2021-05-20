<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Alterando Disciplina</title>
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
                                <a class="nav-link active" aria-current="page" href="criar1.php">Criar usuarios</a>
                            </li>
                        </ul>
                    </div>
                </div>   
        </nav>
                <div class="d-flex justify-content-center">
                    <form action="alterar2.php" method="post"> 
                        <div class="col-auto ">
                            <label for="nome1" class="form-label"><h5>Nome da Disciplina:</h5></label>
                            <input type="nome1" class="form-control bg-warning" name="nome1" aria-describedby="nomelHelp"><br>
                        </div>
                        <h4>Digite os novos dados da Linha da Tabela:</h4><br>
                        <div class="col-auto ">
                            <label for="nome" class="form-label"><h5>Novo Nome da Disciplina:</h5></label>
                            <input type="nome" class="form-control bg-warning" name="nome" id = "nome" aria-describedby="nomelHelp"><br>
                        </div>
                        <div class="col-auto ">
                            <label for="periodo" class="form-label "><h5>Periodo:</h5></label>
                            <input type="periodo" class="form-control bg-warning" name="periodo" id="periodo" aria-describedby="periodoHelp"><br>
                        </div>
                        <div class="col-auto ">
                            <label for="idPreReq" class="form-label lead"><h5>idPreRequisito:</h5></label>
                            <input type="idPreReq" class="form-control bg-warning" name="idPreReq" id="idPreReq" aria-describedby="idePreReqlHelp"><br>
                        </div>
                        <div class="col-auto ">
                            <label for="credito" class="form-label lead"><h5>Credito:</h5></label>
                            <input type="credito" class="form-control bg-warning" name ="credito" id="credito" aria-describedby="creditolHelp"><br>
                        </div>
                        <button type="submit" class="btn btn-warning btn-lg" name="op" value="Alterar" >Alterar Linha</button>
                    </form>
              </div>
            </div>
        </div>
    </body>
</html>