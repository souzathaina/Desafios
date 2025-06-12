<?php
class Hospedagem
{
    private string $nomeHospede;
    private int $numNoites;
    private string $tipoQuarto;
    private float $precoBase;

    public function __construct(string $nomeHospede, int $numNoites, string $tipoQuarto)
    {
        $this->nomeHospede = $nomeHospede;
        $this->numNoites = $numNoites;
        $this->tipoQuarto = strtolower($tipoQuarto);
        $this->precoBase = $this->definirPrecoQuarto();
    }

    private function definirPrecoQuarto(): float
    {
        if ($this->tipoQuarto === "simples") {
            return 120;
        } elseif ($this->tipoQuarto === "luxo") {
            return 200;
        } elseif ($this->tipoQuarto === "suíte") {
            return 350;
        } else {
            return 0; 
        }
    }

    public function calcularTotalHospedagem(): float
    {
        $total = $this->numNoites * $this->precoBase;

        if ($this->numNoites > 5) {
            $total *= 0.9; 
        }

        return $total;
    }

    public function mensagemBoasVindas(): string
    {
        return "Bem-vindo(a), {$this->nomeHospede}! Você reservou um quarto {$this->tipoQuarto} por {$this->numNoites} noites.";
    }

    public function exibirDados(): string
    {
        return "
        <ul>
            <li>{$this->mensagemBoasVindas()}</li>
            <li>Preço por noite: R$ " . number_format($this->precoBase, 2) . "</li>
            <li>Total a pagar: R$ " . number_format($this->calcularTotalHospedagem(), 2) . "</li>
        </ul>";
    }
}
?>