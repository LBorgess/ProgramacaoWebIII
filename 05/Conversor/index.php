<?php
include 'includes/header.php';
include 'includes/Conversor.php';

echo '<pre>';
print_r($_POST);
echo '</pre>';

$conversor = new Conversor();
$resultado = 0;

if (!isset($_POST['valor'], $_POST['de'], $_POST['para'])) {

    $conversor->setValor($_POST['valor']);
    $conversor->setDe($_POST['de']);
    $conversor->setPara($_POST['para']);
}

$resultado = number_format($resultado, 4, ',', '.');

?>

<body>
    <div class="container w-50">
        <div class="jumbotron bg-info text-white mt-5">
            <h1 class="text-center font-weight-bold">Conversor de unidades</h1>
        </div>
        <form method="POST" class="font-weight-bold">
            <div class="form-group">
                <label for="valor">Digite o valor:</label>
                <input class="form-control" type="number" name="valor" id="valor" step="0.01" autocomplete="off" require>
            </div>

            <div class="form-group">
                <label>De:</label>
                <select class="form-control" id="m-de" name="de">
                    <option value="" selected></option>
                    <option value="1">Milímetro(s)</option>
                    <option value="2">Centímetro(s)</option>
                    <option value="3">Metro(s)</option>
                    <option value="4">Quilômetro(s)</option>
                </select>
            </div>

            <div class="form-group">
                <label>Para:</label>
                <select class="form-control" id="m-para" name="para">
                    <option value="" selected></option>
                    <option value="1">Milímetro(s)</option>
                    <option value="2">Centímetro(s)</option>
                    <option value="3">Metro(s)</option>
                    <option value="4">Quilômetro(s)</option>
                </select>
            </div>

            <button class="btn btn-outline-info btn-block mb-4" type="submit">Converter</button>

        </form>

        <!-- Campos sem edição -->
        <!-- Resultado -->

        <label class="font-weight-bold">Resultado:</label>
        <input type="text" class="form-control mb-2" placeholder="<?= $resultado ?>" readonly>

    </div>
</body>
<?php include 'includes/footer.php'; ?>