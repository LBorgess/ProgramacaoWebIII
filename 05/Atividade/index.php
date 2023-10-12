<?php
include 'includes/header.php';
include 'includes/Gorjeta.php';
?>

<?php

$gorjeta = new Gorjeta();
$resultado = 0;
$total = 0;

$gorjeta->setValor($_POST['valor']);
$gorjeta->setQualidade($_POST['qualidade']);

switch ($_POST['qualidade']) {
    case 1:
        $resultado = $gorjeta->excelente();
        break;
    case 2:
        $resultado = $gorjeta->otimo();
        break;
    case 3:
        $resultado = $gorjeta->bom();
        break;
    case 4:
        $resultado = $gorjeta->ruim();
        break;
}

echo $resultado;

print_r($_POST);

?>

<div class="container w-25">
    <div class="jumbotron mt-5">
        <h1 class="text-center">Cálculo de gorjeta</h1>
    </div>
    <form method="POST">
        <div class="form-group">
            <label for="valor">Valor da conta:</label>
            <input class="form-control" type="number" name="valor" id="valor" autocomplete="off" require>
        </div>

        <div class="form-group">
            <label>Qualidade do serviço:</label>
            <select class="form-control" id="qualidade" name="qualidade">
                <option value="" disabled selected></option>
                <option value="1">Excelente - 10%</option>
                <option value="2">Ótimo - 8%</option>
                <option value="3">Bom - 5%</option>
                <option value="4">Ruim - 2%</option>
            </select>
        </div>

        <button class="btn btn-info btn-block mb-4" type="submit">Calcular</button>

    </form>

    <!-- Campos sem edição -->

    <input type="text" class="form-control mb-2" placeholder="PHP" readonly>
    <input type="text" class="form-control" placeholder="PHP" readonly>

</div>

</div>
<?php include 'includes/footer.php'; ?>