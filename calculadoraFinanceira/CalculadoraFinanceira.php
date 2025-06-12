<?php
class Financiamento
{
    private float $valorCompra;
    private int $numParcelas;
    private float $taxaJuros;

    public function __construct(float $valorCompra, int $numParcelas, float $taxaJuros)
    {
        $this->valorCompra = $valorCompra;
        $this->numParcelas = $numParcelas;
        $this->taxaJuros = $taxaJuros / 100; // Convertendo porcentagem para decimal
    }

    
    public function getValorCompra(): float
    {
        return $this->valorCompra;
    }

    public function getNumParcelas(): int
    {
        return $this->numParcelas;
    }

    public function getTaxaJuros(): float
    {
        return $this->taxaJuros * 100; 
    }

    public function calcularValorParcela(): float
    {
        return $this->valorCompra * pow((1 + $this->taxaJuros), $this->numParcelas);
    }

    public function calcularTotalPagar(): float
    {
        return $this->calcularValorParcela();
    }

    public function calcularJurosPago(): float
    {
        return $this->calcularTotalPagar() - $this->valorCompra;
    }

    public function exibirDados(): string
    {
        return "
        <ul>
            <li>Valor da compra: R$ " . number_format($this->getValorCompra(), 2) . "</li>
            <li>Número de parcelas: " . $this->getNumParcelas() . "</li>
            <li>Taxa de juros mensal: " . number_format($this->getTaxaJuros(), 2) . "%</li>
            <li>Valor total a pagar: R$ " . number_format($this->calcularTotalPagar(), 2) . "</li>
            <li>Juros pagos: R$ " . number_format($this->calcularJurosPago(), 2) . "</li>
        </ul>";
    }
}

?>