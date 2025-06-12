<?php
class Aluno
{
    private string $nome;
    private string $disciplina;
    private float $nota1;
    private float $nota2;
    private float $nota3;

    public function __construct(string $nome, string $disciplina, float $nota1, float $nota2, float $nota3)
    {
        $this->nome = $nome;
        $this->disciplina = $disciplina;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->nota3 = $nota3;
    }

    public function getNome(): string
    {
        return "Aluno: {$this->nome}";
    }
    public function getDisciplina()
    {
        return "Disciplina: {$this->disciplina}";

    }
    public function mediaNota(): float
    {
        return ($this->nota1 + $this->nota2 + $this->nota3) / 3;
    }

    public function resultado(): string
    {
        $media = $this->mediaNota();
        if ($media >= 7) {
            return "Média: " . number_format($media, 2) . " - Aprovado";
        } elseif ($media >= 5) {
            return "Média: " . number_format($media, 2) . " - Recuperação";
        } else {
            return "Média: " . number_format($media, 2) . " - Reprovado";
        }
    }

    public function exibirDetalhes(): string
    {
        return "
        <ul>
            <li>{$this->getNome()}</li>
            <li>{$this->getDisciplina()}</li>
            <li><strong>{$this->resultado()}</strong></li>
        </ul>";
    }
}
?>