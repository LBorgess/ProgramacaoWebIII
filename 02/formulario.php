<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Cadastro</title>
</head>
<body>
    <h2 class="text-center mb-2">Cadastro de pessoas</h2>
    <div class="container col-5">
        <form action="insert.php" method="POST">
            <div class="form-group">
                <input class="form-control" type="text" name="nome" autocomplete="off" placeholder="Nome"> </p>
            </div>

            <div class="form-group">
                <input class="form-control" type="text" name="sobrenome" autocomplete="off" placeholder="Sobrenome"> </p>
            </div>

            <div class="form-group">
                <input class="form-control" type="number" name="idade" autocomplete="off" placeholder="Idade"> </p>
            </div>
            
            <input class="btn btn-success" type="submit" value="Enviar">
            <input class="btn btn-danger"type="reset" value="Limpar"> 
            <a class="btn btn-primary" href="exibe.php">Exibir</a>           

        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>