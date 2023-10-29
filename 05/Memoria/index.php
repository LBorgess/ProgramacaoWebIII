<?php include 'includes/header.php'; ?>

<?php require 'includes/Memoria.php';

$memoria = new Memoria();
$caixa = $memoria->getCaixas();

?>

<div class="container">
    <div class="jumbotron border-bottom border-dark mt-1">
        <h3 class="text-center font-weight-bold shadow-lg">Jogo da Memória</h3>
    </div>

    <!-- Local de exibixão das cartas -->

    <?php
    if (!empty($totalBoxes)) {
        $cols = $box->getCols();
        $rows = $box->getRows();
        echo '<div id="memoria">';
        echo '<a id="sair" href=".">Exit Game</a>';
        echo '<p id="timer"><span id="minutes">0</span> Minutes, <span id="seconds">0</span> Seconds</p>';
        for ($r = 0; $r < $rows; $r++) {
            echo '<ul>';
            for ($c = 0; $c < $cols; $c++) {
                $i = $r * $cols + $c;
                if (isset($totalBoxes[$i])) {
                    echo '<li><div id="' . $i . '" onclick="showImage(this);"></div></li>';
                }
            }
            echo '</ul>';
        }
        echo '</div>';
    } else {
        echo '<form id="memoria" method="POST">'
                . '<div class="form-control">'
                    . '<label for="boxesRequest">Por favor informe o número de cartas:</label>'
                    . '<input class="form-control" type="text" id="boxesRequest" name="boxesRequest required" value="" />'
                    . '<input class="btn mt-3" type="submit" value="Start the Game"/>'
                .'</div>'
            . '</form>';
    }
    ?>
    <div id="sucesso">
        Parabéns, você resolveu em <span id="sucessoMinutos">0</span> Minutos, <span id="sucessoSegundos">0</span> Segundos
        <p><a class="btn" href="index.php">Reiniciar jogo</a></p>
    </div>
</div>

<?php include 'includes/footer.php'; ?>