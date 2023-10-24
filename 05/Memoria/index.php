<?php include 'includes/header.php'; ?>
<?php include 'includes/Memoria.php';

$jogo = new Memoria();

$jogo->setQtdErros($_POST['erro']);
$jogo->setPontuacao(2);

?>

<div class="container">
    <div class="jumbotron border-bottom border-dark mt-1">
        <h3 class="text-center">Jogo da Memória</h3>
    </div>

    <!-- Local de exibixão das cartas -->

    <div class="card-group">

        <!-- <div class="card bg-dark border-secondary" style="width: 10rem">
            <a href="">
                <img src="./img/Ball.svg" alt="controle" class="card-img-top">
            </a>
        </div> -->

    </div>

    <div class="container">
        <p>Pontuação: <?= $jogo->getPontuacao() ?></p>
        <p>Total erros: <?= $jogo->getQtdErros() ?></p>
        <form action="index.php" method="post">
            <button type="submit" name="erro" value="" id="erro">Contar</button>
        </form>
    </div>

</div>

<?php include 'includes/footer.php'; ?>