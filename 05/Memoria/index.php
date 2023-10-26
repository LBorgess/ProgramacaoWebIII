<?php include 'includes/header.php'; ?>
<?php include 'includes/Memoria.php';

$jogo = new Memoria();

// $jogo->setQtdErros($_POST['erro']);
// $jogo->setPontuacao(2);

$cartas = $jogo->cards();
shuffle($cartas);

?>

<div class="container">
    <div class="jumbotron border-bottom border-dark mt-1">
        <h3 class="text-center font-weight-bold shadow-lg">Jogo da Memória</h3>
    </div>

    <!-- Local de exibixão das cartas -->

    <div class="card-group">

        <div class="card bg-dark border-secondary" style="width: 10px;">
            <a href="">
                <img src="img/<?= $cartas[0] ?>.png" class="card-img-top">
            </a>
        </div>

    </div>

    <div class="container text-center">
        <p class="font-weight-bold">Pontuação: <?= $jogo->getPontuacao() ?></p>
        <p class="font-weight-bold">Total erros: <?= $jogo->getQtdErros() ?></p>
        <form action="index.php" method="post">
            <button class="font-weight-bold shadow-lg" type="submit" name="erro" value="" id="erro">Contar</button>
        </form>
    </div>

</div>

<?php include 'includes/footer.php'; ?>