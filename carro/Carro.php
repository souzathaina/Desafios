<?php
class Carro
{
    private string $modelo;
    private bool $combustivel;
    private float $tanque;
    private int $consumo;
    private int $kmRodado;

    public function __construct(string $modelo, bool $combustivel, $tanque, int $consumo, int $kmRodado)
    {
        $this->modelo = $modelo;
        $this->combustivel = $combustivel;
        $this->tanque = $tanque;
        $this->consumo = $consumo;
        $this->kmRodado = $kmRodado;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function getCombustivel()
    {
        return $this->combustivel;
    }

    public function getTanque()
    {
        return $this->tanque;
    }

    public function getConsumo()
    {
        return $this->consumo;
    }

    public function calcularAutonomia()
    {
        return $this->tanque * $this->consumo;
    }

    public function calcularCustoPorKm($precoCombustivel)
    {
        return $precoCombustivel / $this->consumo;
    }

    public function verificarRevisao()
    {
        if ($this->kmRodado >= 1000) {
            return "Precisa realizar";
        } else {
            return "Não precisa realizar;";
        }
    }
    public function exibirDados($precoCombustivel): string
    {
        return "
        <ul>
            <li>Modelo: {$this->modelo}</li>
            <li>Autonomia: {$this->calcularAutonomia()} km</li>
            <li>Custo por km: R$ " . number_format($this->calcularCustoPorKm($precoCombustivel), 2, ',', '.') . "</li>
            <li>Revisão: {$this->verificarRevisao()}</li>
        </ul>";
    }
}



?>