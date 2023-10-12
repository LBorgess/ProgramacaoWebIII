<?php
include 'includes/header.php';
include 'includes/Gorjeta.php';
?>

<?php

$gorjeta = new Gorjeta();
$resultado = 0;
$total = 0;

if(isset($_POST['valor'], $_POST['qualidade'])){
    $gorjeta->setValor($_POST['valor']);
    $gorjeta->setQualidade($_POST['qualidade']);

    switch ($_POST['qualidade']) {
        case 1:
            $total = $gorjeta->excelente();
            $resultado = $total - $_POST['valor'];
            break;
        case 2:
            $total = $gorjeta->otimo();
            $resultado = $total - $_POST['valor'];
            break;
        case 3:
            $total = $gorjeta->bom();
            $resultado = $total - $_POST['valor'];
            break;
        case 4:
            $total = $gorjeta->ruim();
            $resultado = $total - $_POST['valor'];
            break;
    }
} 

$total = number_format($total, 2, ',', '.');
$resultado = number_format($resultado, 2, ',', '.');

?>

<div class="container w-25">
    <div class="jumbotron mt-5">
        <h1 class="text-center">Cálculo de gorjeta</h1>
    </div>
    <form method="POST">
        <div class="form-group">
            <label for="valor">Valor da conta:</label>
            <input class="form-control" type="number" name="valor" id="valor" step="0.01" autocomplete="off" require>
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

    <label>Valor da gorjeta</label>
    <input type="text" class="form-control mb-2" placeholder="<?=$resultado?>" readonly>
    <label>Total conta</label>
    <input type="text" class="form-control" placeholder="<?=$total?>" readonly>

</div>

</div>
<?php include 'includes/footer.php'; ?>