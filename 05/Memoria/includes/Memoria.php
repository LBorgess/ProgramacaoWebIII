<?php

# TODO: ALGO PARA VERIFICAR E CONTAR OS PONTOS / JOGADAS
# TODO: ALGO PARA CRIAR E POSICIONAR AS IMAGENS NA TELA PRINCIPAL
# TODO: ALGO PARA VALIDAR SE AS IMAGENS SÃO IGUAIS
# TODO: FUNÇÃO PARA COMPARAR OS VALORES
# TODO: CLICAR E MOSTRAR AS IMAGENS
# FEATURE: CONECTAR AO BANCO DE DADOS, COM USUÁRIO, PONTUAÇÃO, QUANTIDADE DE TENTATIVAS

class Memoria
{
    /**
     * Váriavel de controle da pontuação
     * @var integer
     */
    private $pontuacao = 0;

    /**
     * Várivel que adicionar um ponto na pontuação
     * @var integer
     */
    private $ponto;

    /**
     * Várivel que contabiliza a quantidade de erros
     * @var integer
     */
    private $qtdErros = 0;

    function setPontuacao($pontuacao)
    {
        $this->pontuacao = $pontuacao;
    }

    function getPontuacao()
    {
        return $this->pontuacao;
    }

    function setQtdErros($qtdErros)
    {
        $this->qtdErros = $qtdErros;
    }

    function getQtdErros()
    {
        return $this->qtdErros;
    }

    /**
     * Função para exibir os cards
     * @return void
     */
    function listCard()
    {
    }

    /**
     * Número das cartas
     * @return void
     */
    function cards()
    {
        $cards = [
            '003', '006', '009', '012',
            '025', '031', '034', '065',
            '083', '101', '143', '144',
            '150', '160', '164', '245'
        ];
    }
}
