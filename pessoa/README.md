# 📋 Calculadora de IMC – PHP

Este projeto permite calcular o Índice de Massa Corporal (IMC) de uma pessoa a partir do nome, peso e altura informados, exibindo o resultado e a classificação correspondente.

## 🧮 Funcionalidades

- Cadastro de:

  - Nome
  - Peso (kg)
  - Altura (m)

- Cálculos realizados:
  - Cálculo do IMC (peso dividido pela altura ao quadrado)
  - Classificação do IMC em categorias de saúde (abaixo do peso, peso normal, sobrepeso, obesidade)

## 📂 Estrutura do Projeto

imc/  
├── IMC.php # Classe com lógica de cálculo e classificação do IMC  
├── index.php # Interface web para entrada de dados  
└── README.md # Este arquivo

## 🔍 Exemplo de uso

Se você cadastrar:

- Nome: João
- Peso: 70 kg
- Altura: 1.75 m

O sistema exibirá algo como:

Nome: João  
Peso: 70 kg  
Altura: 1.75 m  
IMC: 22.86  
Classificação: Peso normal

## 🚀 Como usar

1. **Requisitos**:

   - PHP instalado (ex: XAMPP, WampServer ou PHP CLI)
   - Navegador web

2. **Coloque o projeto na pasta do servidor local**:  
   `C:\xampp\htdocs\Desafio\imc\`

3. **Acesse no navegador**:  
   `http://localhost/Desafio/imc/`

4. **Preencha o formulário** e clique em **Calcular IMC**.

## 📁 Sobre os arquivos

- `IMC.php`: Contém a classe `IMC`, responsável por armazenar os dados, calcular e classificar o IMC.
- `index.php`: Formulário HTML com integração PHP que recebe os dados via `POST` e exibe os resultados formatados.
- `README.md`: Este arquivo de documentação.

## 📝 Observações

- O cálculo do IMC é feito usando a fórmula: **peso / (altura²)**.
- A classificação segue padrões internacionais de saúde.
- Os valores do IMC são exibidos com duas casas decimais para melhor leitura.

## 📄 Licença

Este projeto é livre para fins educacionais.

---

Desenvolvido com 💻 em PHP e HTML.
