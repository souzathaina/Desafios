<?php

class Produto
{
    private string $nome;
    private int $quantidadeEstoque;
    private float $valorUnitario;

    public function __construct(string $nome, int $quantidadeEstoque, $valorUnitario)
    {
        $this->nome = $nome;
        $this->quantidadeEstoque = $quantidadeEstoque;
        $this->valorUnitario = $valorUnitario;
    }
    public function getNome(): string
    {
        return $this->nome;
    }

    public function getQuantidade(): int
    {
        return $this->quantidadeEstoque;
    }

    public function getValorUnitario(): float
    {
        return $this->valorUnitario;
    }

    public function entradaEstoque($entradaEstoque)
    {
        return $this->quantidadeEstoque + $entradaEstoque;
    }

    public function saidaEstoque(int $quantidadeEstoque)
    {
        if ($quantidadeEstoque > $this->quantidadeEstoque) {
            return "Erro: quantidade insuficiente no estoque";
        } else {
            return "saida realizada";
        }
    }
    public function calcularValorEstoque()
    {
        return $this->quantidadeEstoque * $this->valorUnitario;
    }
    public function exibirDetalhes(): string
    {
        return "
        <ul>
            <li>Produto: {$this->getNome()}</li>
            <li>Quantidade em Estoque: {$this->getQuantidade()}</li>
            <li>Valor Unitário: R$ " . number_format($this->getValorUnitario(), 2, ',', '.') . "</li>
            <li>Valor Total em Estoque: R$ " . number_format($this->calcularValorEstoque(), 2, ',', '.') . "</li>
        </ul>";

    }
}
?>