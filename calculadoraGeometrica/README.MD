# 📐 Calculadora de Área Geométrica – PHP

Este projeto permite calcular a área de figuras geométricas simples como quadrado, retângulo e círculo.

## 🧮 Funcionalidades

- Escolha entre 3 figuras:
  - 🔷 Quadrado
  - 🟦 Retângulo
  - ⚪ Círculo
- Cálculo automático da área com base nas medidas fornecidas
- Exibição do resultado formatado na tela

## 📂 Estrutura do Projeto

calculadoraGeometrica/
├── CalculadoraGeometrica.php # Classe com lógica para cálculo da área
├── index.php # Formulário e exibição do resultado
└── README.md # Este arquivo

## 🧠 Lógica por Figura

- **Quadrado**: área = lado²
- **Retângulo**: área = base × altura
- **Círculo**: área = π × raio²

## 💡 Exemplo de uso

Se você escolher:

- Figura: Círculo
- Medida 1: 5

O resultado será algo como:

Figura: círculo
Área calculada: 78,54 unidades²

## 🚀 Como executar

1. **Pré-requisitos**:

   - PHP instalado (XAMPP, WampServer, Laragon ou servidor local)

2. **Coloque o projeto em seu servidor local**, por exemplo:
   C:\xampp\htdocs\Desafio\calculadoraGeometrica\

3. **Acesse no navegador**:
   http://localhost/Desafio/calculadoraGeometrica/

4. **Preencha o formulário** e clique em **Calcular Área**.

## 📌 Observações

- Medida 2 é **opcional** e só será utilizada para **retângulo**.
- O nome da figura será tratado automaticamente em minúsculas para facilitar a verificação.
- Os valores são arredondados com **2 casas decimais**.

## 📄 Licença

Este projeto é de uso livre para fins educacionais.

---

Desenvolvido com 💻 PHP puro e formulários HTML.
