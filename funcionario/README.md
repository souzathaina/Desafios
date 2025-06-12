# 📋 Sistema de Cadastro e Cálculo de Funcionário – PHP

Este projeto permite cadastrar informações de um funcionário e realizar cálculos salariais com base no salário base, carga horária semanal, bônus e horas extras.

## 🧮 Funcionalidades

- Cadastro de:
  - Nome
  - Cargo
  - Salário base
  - Carga horária semanal
  - Bônus
  - Horas extras

- Cálculos realizados:
  - Valor da hora trabalhada (salário dividido pelas horas mensais)
  - Valor das horas extras (1,5x o valor da hora)
  - Salário final (salário base + bônus + valor das horas extras)

## 📂 Estrutura do Projeto

funcionario/
├── Funcionario.php # Classe com lógica de cálculo
├── index.php # Interface web para entrada de dados
└── README.md # Este arquivo


## 🔍 Exemplo de uso

Se você cadastrar:

- Nome: João  
- Cargo: Analista  
- Salário: R$ 3000  
- Carga horária semanal: 40h  
- Bônus: R$ 200  
- Horas extras: 10h  

O sistema exibirá algo como:

Funcionário: João, Cargo: Analista
Salário base: R$ 3.000,00
Valor da hora: R$ 18,75
Hora extra (10h): R$ 281,25
Bônus: R$ 200,00
Salário final: R$ 3.481,25


## 🚀 Como usar

1. **Requisitos**:
   - PHP instalado (ex: XAMPP, WampServer ou PHP CLI)
   - Navegador web

2. **Coloque o projeto na pasta do servidor local**:
C:\xampp\htdocs\Desafio\funcionario\

3. **Acesse no navegador**:
http://localhost/Desafio/funcionario/

4. **Preencha o formulário** e clique em **Calcular**.

## 📁 Sobre os arquivos

- `Funcionario.php`: Contém a classe `Funcionario`, responsável por armazenar os dados e realizar os cálculos salariais.
- `index.php`: Formulário HTML com integração PHP que recebe os dados via `POST` e exibe os resultados formatados.
- `README.md`: Este arquivo de documentação.

## 📝 Observações

- O valor da hora é calculado com base em **4 semanas por mês**.
- O valor da **hora extra** é considerado **1,5x o valor da hora normal**.
- Todos os valores são exibidos no **formato brasileiro** (R$ e separadores).

## 📄 Licença

Este projeto é livre para fins educacionais.

---

Desenvolvido com 💻 em PHP e HTML.
