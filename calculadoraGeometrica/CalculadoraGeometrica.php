<?php
class Calculadora
{
    private string $tipoFigura;
    private float $medida1;
    private float $medida2;

    public function __construct(string $tipoFigura, float $medida1, ?float $medida2 = null)
    {
        $this->tipoFigura = strtolower($tipoFigura);
        $this->medida1 = $medida1;
        $this->medida2 = $medida2;
    }

    public function calcularArea(): float
    {
        switch ($this->tipoFigura) {
            case "quadrado":
                return pow($this->medida1, 2);
            case "retângulo":
                return $this->medida1 * $this->medida2;
            case "círculo":
                return pi() * pow($this->medida1, 2);
            default:
                return 0; 
        }
    }

    public function exibirDados(): string
    {
        return "
        <ul>
            <li>Figura: {$this->tipoFigura}</li>
            <li>Área calculada: " . number_format($this->calcularArea(), 2) . " unidades²</li>
        </ul>";
    }
}

?>