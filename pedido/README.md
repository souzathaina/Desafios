# 📋 Sistema de Pedido com Cálculo de Desconto e Imposto – PHP

Este projeto permite cadastrar informações de um pedido, calcular o valor total bruto, aplicar desconto para clientes premium, calcular imposto e mostrar o total final.

## 🧮 Funcionalidades

- Cadastro de:

  - Nome do Produto
  - Quantidade
  - Preço Unitário
  - Tipo de Cliente (Normal ou Premium)

- Cálculos realizados:
  - Total bruto (quantidade × preço unitário)
  - Desconto de 10% para clientes premium
  - Imposto fixo de 8% sobre o total bruto
  - Total final (total bruto - desconto + imposto)

## 📂 Estrutura do Projeto

pedido/  
├── Pedido.php # Classe com lógica de cálculo e exibição do pedido  
├── index.php # Formulário web para entrada de dados e exibição do resultado  
└── README.md # Este arquivo de documentação

## 🔍 Exemplo de uso

Se você cadastrar:

- Nome do Produto: Caneta
- Quantidade: 10
- Preço Unitário: R$ 2,50
- Tipo de Cliente: Premium

O sistema exibirá algo como:

- Produto: Caneta
- Quantidade: 10
- Preço Unitário: R$ 2,50
- Cliente Premium: Sim
- Total Bruto: R$ 25,00
- Desconto: R$ 2,50
- Imposto: R$ 2,00
- Total Final: R$ 24,50

## 🚀 Como usar

1. **Requisitos**:

   - PHP instalado (ex: XAMPP, WampServer ou PHP CLI)
   - Navegador web

2. **Coloque o projeto na pasta do servidor local**:  
   `C:\xampp\htdocs\Desafio\pedido\`

3. **Acesse no navegador**:  
   `http://localhost/Desafio/pedido/`

4. **Preencha o formulário** e clique em **Calcular Pedido**.

## 📁 Sobre os arquivos

- `Pedido.php`: Contém a classe `Pedido`, responsável por armazenar os dados, realizar os cálculos e gerar a saída formatada em HTML.
- `index.php`: Formulário HTML com integração PHP que recebe os dados via `POST` e exibe os resultados do pedido.
- `README.md`: Este arquivo de documentação.

## 📝 Observações

- O desconto de 10% é aplicado somente para clientes premium.
- O imposto é fixo de 8% sobre o total bruto, independente do tipo de cliente.
- Os valores monetários são exibidos no formato brasileiro (R$ com vírgula decimal e ponto para milhar).

## 📄 Licença

Este projeto é livre para fins educacionais.

---

Desenvolvido com 💻 em PHP e HTML.
