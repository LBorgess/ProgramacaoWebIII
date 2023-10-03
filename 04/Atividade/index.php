<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Cadastro</title>
</head>

<body>

    <div class="row">
        <div class="col s12 m6 push-m3">
            <h3 class="center">Cadastro de funcionários</h3>
            <form method="POST" action="exibe_funcionario.php">
                    
                <div class="input-field col s12">
                    <label for="codigo">Codigo</label>
                    <input type="number" name="codigo" id="codigo" autocomplete="off" require>
                </div>

                <div class="input-field col s12">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" autocomplete="off" require>
                </div>                
                
                <div class="input-field col s12">                    
                    <label for="nascimento">Data de nascimento</label>
                    <input type="text" name="nascimento" id="nascimento" autocomplete="off" require>
                </div>

                <div class="input-field col s12">                    
                    <label for="salario">Salário</label>
                    <input type="number" name="salario" id="salario" autocomplete="off" require>
                </div>

                <div class="input-field col s12"> 
                    <button type="submit" class="waves-effect waves-light btn-small" name="enviar">
                        <i class="material-icons right">send</i>
                        Enviar
                    </button>

                    <button type="reset" class="waves-effect waves-light btn-small red lighten-1">
                        <i class="material-icons right">delete</i>
                        Limpar
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>