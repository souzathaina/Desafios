<?php
class IMC
{
    private string $nome;
    private float $peso;
    private float $altura;

    public function __construct(string $nome, float $peso, float $altura)
    {
        $this->nome = $nome;
        $this->peso = $peso;
        $this->altura = $altura;
    }

    public function calcularIMC(): float
    {
        return $this->peso / pow($this->altura, 2);
    }

    public function classificarIMC(): string
    {
        $imc = $this->calcularIMC();

        if ($imc < 18.5) {
            return "Abaixo do peso";
        } elseif ($imc >= 18.5 && $imc < 24.9) {
            return "Peso normal";
        } elseif ($imc >= 25 && $imc < 29.9) {
            return "Sobrepeso";
        } else {
            return "Obesidade";
        }
    }

    public function exibirDados(): string
    {
        return "
        <ul>
            <li>Nome: {$this->nome}</li>
            <li>Peso: {$this->peso} kg</li>
            <li>Altura: {$this->altura} m</li>
            <li>IMC: " . number_format($this->calcularIMC(), 2) . "</li>
            <li>Classificação: {$this->classificarIMC()}</li>
        </ul>";
    }
}

?>