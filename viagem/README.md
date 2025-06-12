# 🚗 Calculadora de Viagem – PHP

Este projeto permite calcular informações importantes de uma viagem, como velocidade média, consumo estimado de combustível e custo total, a partir dos dados fornecidos pelo usuário.

## 🧮 Funcionalidades

- Cadastro de:

  - Origem da viagem
  - Destino da viagem
  - Distância em quilômetros
  - Tempo estimado em horas
  - Consumo do veículo em litros por quilômetro
  - Preço do combustível por litro

- Cálculos realizados:

  - Velocidade média (distância dividida pelo tempo estimado)
  - Consumo estimado de combustível para a viagem
  - Custo estimado total da viagem

- Exibição de resumo com todas as informações calculadas

## 📂 Estrutura do Projeto

viagem/  
├── Viagem.php # Classe `Viagem` com lógica dos cálculos da viagem  
├── index.php # Formulário HTML e processamento PHP para calcular e exibir resultados  
└── README.md # Este arquivo

## 🔍 Exemplo de uso

Se você cadastrar:

- Origem: São Paulo
- Destino: Rio de Janeiro
- Distância: 430 km
- Tempo estimado: 5 horas
- Consumo do veículo: 0.1 litros/km
- Preço do combustível: R$ 6,00

O sistema exibirá:

- Origem: São Paulo
- Destino: Rio de Janeiro
- Velocidade média: 86.00 km/h
- Consumo estimado: 43.00 litros
- Custo estimado: R$ 258,00

## 🚀 Como usar

1. **Requisitos**:

   - PHP instalado (ex: XAMPP, WampServer ou PHP CLI)
   - Navegador web

2. **Coloque o projeto na pasta do servidor local**:  
   Exemplo: `C:\xampp\htdocs\Desafio\viagem\`

3. **Acesse no navegador**:  
   `http://localhost/Desafio/viagem/`

4. **Preencha o formulário** e clique em **Calcular Viagem**.

## 📁 Sobre os arquivos

- `Viagem.php`: Contém a classe `Viagem` responsável por armazenar os dados da viagem e realizar os cálculos necessários.
- `index.php`: Formulário HTML para entrada dos dados da viagem e exibição do resumo com os resultados.
- `README.md`: Este arquivo de documentação.

## 📝 Observações

- A velocidade média é calculada somente se o tempo estimado for maior que zero.
- Os valores monetários e numéricos são exibidos com duas casas decimais para melhor leitura.

## 📄 Licença

Este projeto é livre para fins educacionais.

---

Desenvolvido com 💻 em PHP e HTML.
