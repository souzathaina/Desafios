# 🏨 Reserva de Hospedagem – PHP

Este projeto permite realizar reservas de quartos de hotel, calculando o valor total com base no tipo de quarto, número de noites e aplicando desconto para estadias longas.

## 🧮 Funcionalidades

- Cadastro de:

  - Nome do hóspede
  - Número de noites
  - Tipo de quarto (Simples, Luxo, Suíte)

- Cálculos realizados:

  - Definição do preço base por tipo de quarto
  - Cálculo do valor total da hospedagem
  - Aplicação de desconto de 10% para reservas com mais de 5 noites

- Exibição de resumo da reserva com mensagem de boas-vindas, preço por noite e total a pagar

## 📂 Estrutura do Projeto

reservaHotel/  
├── ReservaHotel.php # Classe `Hospedagem` com lógica da reserva e cálculo de preços  
├── index.php # Formulário HTML e processamento PHP para realizar reservas  
└── README.md # Este arquivo

## 🔍 Exemplo de uso

Se você cadastrar:

- Nome do hóspede: Ana
- Número de noites: 7
- Tipo de quarto: Suíte

O sistema exibirá:

- Bem-vindo(a), Ana! Você reservou um quarto suíte por 7 noites.
- Preço por noite: R$ 350,00
- Total a pagar: R$ 2205,00 (com 10% de desconto aplicado)

## 🚀 Como usar

1. **Requisitos**:

   - PHP instalado (ex: XAMPP, WampServer ou PHP CLI)
   - Navegador web

2. **Coloque o projeto na pasta do servidor local**:  
   Exemplo: `C:\xampp\htdocs\Desafio\reservaHotel\`

3. **Acesse no navegador**:  
   `http://localhost/Desafio/reservaHotel/`

4. **Preencha o formulário** e clique em **Reservar**.

## 📁 Sobre os arquivos

- `ReservaHotel.php`: Contém a classe `Hospedagem` responsável por armazenar os dados da reserva, calcular valores, definir preços e gerar mensagens.
- `index.php`: Formulário HTML para entrada dos dados do hóspede e exibição do resumo da reserva.
- `README.md`: Este arquivo de documentação.

## 📝 Observações

- O desconto de 10% é aplicado automaticamente para reservas acima de 5 noites.
- Os valores monetários são exibidos com duas casas decimais.
- Caso o tipo de quarto informado seja inválido, o preço base será zero.

## 📄 Licença

Este projeto é livre para fins educacionais.

---

Desenvolvido com 💻 em PHP e HTML.
