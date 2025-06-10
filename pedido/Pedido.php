Formulário com nome do produto, quantidade, preço unitário
e tipo de cliente (normal ou premium). A classe deve
calcular:

Habilidades:
Operações matemáticas com formatação
Estrutura condicional
Encapsulamento
<?php
class Pedido
{
    private string $nome;
    private int $quantidade;
    private float $precoUnitario;
    private boolean $clientePremium;

    public function __construct(string $nome, int $quantidade, $precoUnitario, boolean $clientePremium)
    {
        $this->nome = $nome;
        $this->quantidade = $quantidade;
        $this->precoUnitario = $precoUnitario;
        $this->clientePremium = $clientePremium;
    }
    public function getNome()
    {
        return $this->nome;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }
    public function getPrecoUnitario()
    {
        return $this->precoUnitario;
    }
    public function getCliente()
    {
        return $this->clientePremium;
    }
    /*Total bruto
    Desconto (ex: 10% se for premium)
    Imposto (simples de 8%)
    Total final
        */
    public function totalBruto()
    {
        return $this->quantidade * $this->precoUnitario;
    }

    public function desconto()
    {
        if ($this->clientePremium) {
            return $this->totalBruto() * 0.10;//10% de desconto
        } else {
            return 0;
        }

    }
}