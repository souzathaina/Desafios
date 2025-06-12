<?php

class Produto
{
    private string $nome;
    private int $quantidadeEstoque;
    private float $valorUnitario;

    public function __construct(string $nome, int $quantidadeEstoque, float $valorUnitario)
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

    public function entradaEstoque(int $quantidade): void
    {
        $this->quantidadeEstoque += $quantidade;
    }

    public function saidaEstoque(int $quantidade): string
    {
        if ($quantidade > $this->quantidadeEstoque) {
            return "Erro: quantidade insuficiente no estoque";
        } else {
            $this->quantidadeEstoque -= $quantidade;
            return "Saída realizada com sucesso";
        }
    }

    public function calcularValorEstoque(): float
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