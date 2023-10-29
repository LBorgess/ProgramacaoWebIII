<?php

# TODO: ALGO PARA VERIFICAR E CONTAR OS PONTOS / JOGADAS
# TODO: ALGO PARA CRIAR E POSICIONAR AS IMAGENS NA TELA PRINCIPAL
# TODO: ALGO PARA VALIDAR SE AS IMAGENS SÃO IGUAIS
# TODO: FUNÇÃO PARA COMPARAR OS VALORES
# TODO: CLICAR E MOSTRAR AS IMAGENS
# FEATURE: CONECTAR AO BANCO DE DADOS, COM USUÁRIO, PONTUAÇÃO, QUANTIDADE DE TENTATIVAS

class Memoria
{
    private static $maxNumeroDeImages = 36;
    private static $totalCaixas = array();
    private static $totalCaixasCodificada = array();
    private static $mostrarCaixa = null;
    private static $colunas = null;
    private static $linhas = null;

    public function __construct()
    {
        if (isset($_POST['caixasRequest']) && is_numeric($_POST['caixasRequest']) && $_POST['caixasRequest'] > 1) {
            self::$mostrarCaixa = min(self::$maxNumeroDeImages, (intval($_POST['caixasRequest'])));
            self::$colunas = ceil(sqrt(self::$mostrarCaixa));
            self::$linhas - ceil(self::$mostrarCaixa / self::$colunas);
        }
    }

    public static function getCaixas()
    {
        if (self::$mostrarCaixa) {
            while (count(self::$totalCaixas) > floor(self::$mostrarCaixa / 2)) {
                $rand = rand(1, self::$maxNumeroDeImages);
                if (!in_array($rand, self::$totalCaixas)) {
                    array_push(self::$totalCaixas, $rand);
                }
            }

            self::$totalCaixas = array_merge(self::$totalCaixas, self::$totalCaixas);
            shuffle(self::$totalCaixas);
        }
        self::setCodificaValores();

        return self::$totalCaixas;
    }

    public static function getColunas()
    {
        return self::$colunas;
    }

    public static function getLinhas()
    {
        return self::$linhas;
    }

    public static function setCodificaValores()
    {
        foreach (self::$totalCaixas as $valores) {
            array_push(self::$totalCaixasCodificada, base64_encode($valores + 250));
        }

        setcookie("totalCaixasCodificada", json_encode(self::$totalCaixasCodificada), time() + (86400 * 30), "/");
    }
}
