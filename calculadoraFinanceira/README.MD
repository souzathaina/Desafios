# Simulador de Financiamento em PHP

Este projeto é uma aplicação web simples, desenvolvida em PHP, que simula um financiamento com base no valor da compra, número de parcelas e taxa de juros mensal. O sistema calcula o valor total a pagar, os juros pagos e exibe um resumo das informações.

## 📂 Estrutura do Projeto

calculadoraFinanceira/
├── Financiamento.php
├── index.php
├── CalculadoraFinanceira.php (caso seja necessário futuramente)
└── README.md

## ⚙️ Funcionalidades

- Recebe o valor da compra, número de parcelas e taxa de juros mensal.
- Calcula:
  - Valor total a pagar.
  - Juros pagos.
- Exibe um resumo detalhado do financiamento.

## 🖥️ Como executar

1. Certifique-se de ter o **XAMPP** instalado e o **Apache** ativado.
2. Coloque a pasta `calculadoraFinanceira` dentro de `C:\xampp\htdocs\Desafio\`.
3. Acesse o navegador e digite: http://localhost/Desafio/calculadoraFinanceira/
4. Preencha os dados solicitados e clique em **Calcular Financiamento**.

## 🧮 Exemplo de uso

Suponha que:

- Valor da compra: R$ 1.000,00
- Parcelas: 12
- Juros: 2% ao mês

O sistema exibirá:

- Valor total a pagar
- Juros totais pagos
- Outras informações importantes do financiamento

## 📌 Observações

- O cálculo de parcelas considera **juros compostos**.
- O arquivo `CalculadoraFinanceira.php` pode ser usado para ampliar a aplicação com outras funcionalidades no futuro (como amortização, tabela price etc).

## 📄 Licença

Este projeto é de uso educacional. Sinta-se livre para modificar e aprimorar.

---

Desenvolvido com 💜 em PHP.

