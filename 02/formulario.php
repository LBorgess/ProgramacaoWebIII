<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário - Pessoas</title>
</head>
<body>
    <h2>Cadastro de pessoas</h2>
    <form action="insert.php" method="POST">
        <input type="text" name="nome" autocomplete="off" placeholder="Nome"> </p>
        <input type="text" name="sobrenome" autocomplete="off" placeholder="Sobrenome"> </p>
        <input type="number" name="idade" autocomplete="off" placeholder="Idade"> </p>
        <input type="submit" value="Enviar">
        <input type="reset" value="Limpar">
    </form>
</body>
</html>