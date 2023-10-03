<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="exibe_funcionario.php" method="POST">

        <label for="codigo">Codigo: </label>
        <input type="number" name="codigo" id="codigo" autocomplete="off"> <br>

        <label for="nome">Nome completo: </label>
        <input type="text" name="nome" id="nome" autocomplete="off"> <br>

        <label for="nascimento">Data de nascimento: </label>
        <input type="date" name="nascimento" id="nascimento" autocomplete="off"> <br>

        <label for="salario">Salário: </label>
        <input type="number" name="salario" id="salario" autocomplete="off"> <br>

        <button type="submit">Enviar</button>
    </form>
</body>

</html>