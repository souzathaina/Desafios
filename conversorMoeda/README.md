# Conversor de Moeda em PHP 💱

Este projeto permite converter valores em reais (R$) para **dólares (USD)** ou **euros (EUR)**, com base na cotação informada manualmente pelo usuário.

## 📂 Estrutura do Projeto

conversorMoeda/
├── ConversorMoeda.php
├── index.php
└── README.md

## ⚙️ Funcionalidades

- Conversão de valor em reais para:

  - Dólar americano (USD)
  - Euro (EUR)

- O usuário insere:

  - Valor em reais
  - Moeda de destino (USD ou EUR)
  - Cotação atual da moeda

- O sistema realiza o cálculo da conversão e exibe o resultado formatado.

## 🧠 Regras do sistema

- O cálculo da conversão é feito da seguinte forma: valor_convertido = valor_em_reais / cotacao_atual

- O sistema só aceita USD ou EUR como moedas de destino.
- Qualquer outro valor resulta em uma mensagem de erro informando moeda inválida.

## 🖥️ Como executar

1. Certifique-se de ter o **XAMPP** instalado e o **Apache** ativado.
2. Coloque a pasta `conversorMoeda` dentro de: C:\xampp\htdocs\Desafio\

3. Acesse pelo navegador: http://localhost/Desafio/conversorMoeda/
4. Preencha o formulário e clique em **Converter**.

## 📊 Exemplo de uso

Se o usuário informar:

- Valor em reais: `100`
- Moeda de destino: `USD`
- Cotação atual: `5.00`

O resultado exibido será: Valor convertido para USD: 20,00 USD

## 📌 Observações

- O sistema **não consulta a cotação automaticamente**; ela deve ser informada manualmente.
- Ideal para fins educativos e simulações simples de conversão.

## 📄 Licença

Este projeto é de uso livre e tem finalidade educativa.

---

Desenvolvido com 💻 e ☕ em PHP.

