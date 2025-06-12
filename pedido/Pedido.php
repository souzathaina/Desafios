<?php
class Pedido
{
    private string $nome;
    private int $quantidade;
    private float $precoUnitario;
    private bool $clientePremium;

    public function __construct(string $nome, int $quantidade, float $precoUnitario, bool $clientePremium)
    {
        $this->nome = $nome;
        $this->quantidade = $quantidade;
        $this->precoUnitario = $precoUnitario;
        $this->clientePremium = $clientePremium;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getQuantidade(): int
    {
        return $this->quantidade;
    }

    public function getPrecoUnitario(): float
    {
        return $this->precoUnitario;
    }

    public function getClientePremium(): bool
    {
        return $this->clientePremium;
    }

    public function calcularTotalBruto(): float
    {
        return $this->quantidade * $this->precoUnitario;
    }

    public function calcularDesconto(): float
    {
        if ($this->clientePremium === true) {
            return $this->calcularTotalBruto() * 0.10;
        } else {
            return 0;
        }
    }
    public function calcularImposto(): float
    {
        return $this->calcularTotalBruto() * 0.08;
    }

    public function calcularTotal(): float
    {
        return $this->calcularTotalBruto() - $this->calcularDesconto() + $this->calcularImposto();
    }

    public function exibirDetalhes(): string
    {
        return "
        <ul>
            <li>Produto: {$this->getNome()}</li>
            <li>Quantidade: {$this->getQuantidade()}</li>
            <li>Preço Unitário: R$ " . number_format($this->getPrecoUnitario(), 2, ',', '.') . "</li>
            <li>Cliente Premium: " . ($this->getClientePremium() ? "Sim" : "Não") . "</li>
            <li>Total Bruto: R$ " . number_format($this->calcularTotalBruto(), 2, ',', '.') . "</li>
            <li>Desconto: R$ " . number_format($this->calcularDesconto(), 2, ',', '.') . "</li>
            <li>Imposto: R$ " . number_format($this->calcularImposto(), 2, ',', '.') . "</li>
            <li>Total Final: R$ " . number_format($this->calcularTotal(), 2, ',', '.') . "</li>
        </ul>";
    }
}
?>