# 📦 Controle de Estoque – PHP

Este projeto permite gerenciar o estoque de produtos, com cadastro, entrada e saída, exibindo o valor total atualizado do estoque.

## 🧮 Funcionalidades

- Cadastro de:

  - Nome do Produto
  - Quantidade Inicial
  - Valor Unitário

- Movimentações:

  - Entrada (aumenta estoque)
  - Saída (diminui estoque, valida quantidade disponível)

- Cálculos realizados:
  - Valor total do estoque (quantidade × valor unitário)
  - Verificação para não permitir saída maior que o estoque disponível

## 📂 Estrutura do Projeto

produto/  
├── Produto.php # Classe com lógica de gerenciamento do produto e estoque  
├── index.php # Formulário HTML e processamento PHP para atualizar estoque  
└── README.md # Este arquivo

## 🔍 Exemplo de uso

Se você cadastrar:

- Produto: Caneta
- Quantidade Inicial: 50
- Valor Unitário: R$ 2,00

E fizer uma movimentação de saída de 10 unidades, o sistema exibirá:

Produto: Caneta  
Quantidade em Estoque: 40  
Valor Unitário: R$ 2,00  
Valor Total em Estoque: R$ 80,00

Se tentar retirar mais unidades do que o estoque, será exibida uma mensagem de erro.

## 🚀 Como usar

1. **Requisitos**:

   - PHP instalado (ex: XAMPP, WampServer ou PHP CLI)
   - Navegador web

2. **Coloque o projeto na pasta do servidor local**:  
   Exemplo: `C:\xampp\htdocs\Desafio\produto\`

3. **Acesse no navegador**:  
   `http://localhost/Desafio/produto/`

4. **Preencha o formulário** e clique em **Atualizar Estoque**.

## 📁 Sobre os arquivos

- `Produto.php`: Contém a classe `Produto` com atributos e métodos para controlar estoque, entrada, saída e cálculo de valor.
- `index.php`: Formulário HTML que recebe dados via `POST` e exibe o estoque atualizado e mensagens de erro quando necessário.
- `README.md`: Este arquivo de documentação.

## 📝 Observações

- A saída só é permitida se a quantidade solicitada for menor ou igual ao estoque atual.
- Os valores monetários são exibidos com duas casas decimais e formatação brasileira (vírgula como separador decimal).

## 📄 Licença

Este projeto é livre para fins educacionais.

---

Desenvolvido com 💻 em PHP e HTML.
