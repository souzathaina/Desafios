<?php
class ConversorMoeda
{
    private float $valorReais;
    private string $moedaDestino;
    private float $cotacaoAtual;

    public function __construct(float $valorReais, string $moedaDestino, float $cotacaoAtual)
    {
        $this->valorReais = $valorReais;
        $this->moedaDestino = strtoupper($moedaDestino); 
        $this->cotacaoAtual = $cotacaoAtual;
    }

    public function converterMoeda(): float
    {
        if ($this->moedaDestino === "USD" || $this->moedaDestino === "EUR") {
            return $this->valorReais / $this->cotacaoAtual;
        } else {
            return 0; 
        }
    }

    public function exibirResultado(): string
    {
        if ($this->converterMoeda() > 0) {
            return "<p>Valor convertido para {$this->moedaDestino}: " .
                number_format($this->converterMoeda(), 2, ',', '.') . " {$this->moedaDestino}</p>";
        } else {
            return "<p>Moeda inválida. Escolha USD ou EUR.</p>";
        }
    }
}
?>