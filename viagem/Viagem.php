<?php
class Viagem
{
    private string $origem;
    private string $destino;
    private float $distancia;
    private float $tempoEstimado;
    private float $consumoPorKm;
    private float $precoCombustivel;

    public function __construct(string $origem, string $destino, float $distancia, float $tempoEstimado, float $consumoPorKm, float $precoCombustivel)
    {
        $this->origem = $origem;
        $this->destino = $destino;
        $this->distancia = $distancia;
        $this->tempoEstimado = $tempoEstimado;
        $this->consumoPorKm = $consumoPorKm;
        $this->precoCombustivel = $precoCombustivel;
    }

    public function getOrigem(): string
    {
        return "Origem: {$this->origem}";
    }

    public function getDestino(): string
    {
        return "Destino: {$this->destino}";
    }

    public function calcularVelocidadeMedia(): float
    {
        if ($this->tempoEstimado > 0) {
            return $this->distancia / $this->tempoEstimado;
        } else {
            return 0;
        }
    }

    public function calcularConsumoEstimado(): float
    {
        return $this->distancia * $this->consumoPorKm;
    }

    public function calcularCustoViagem(): float
    {
        return $this->calcularConsumoEstimado() * $this->precoCombustivel;
    }

    public function exibirDados(): string
    {
        return "
        <ul>
            <li>{$this->getOrigem()}</li>
            <li>{$this->getDestino()}</li>
            <li>Velocidade média: " . number_format($this->calcularVelocidadeMedia(), 2) . " km/h</li>
            <li>Consumo estimado: " . number_format($this->calcularConsumoEstimado(), 2) . " litros</li>
            <li>Custo estimado: R$ " . number_format($this->calcularCustoViagem(), 2) . "</li>
        </ul>";
    }
}
?>