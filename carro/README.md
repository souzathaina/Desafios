# Simulador de Consumo de Carro em PHP 🚗⛽

Este projeto é uma aplicação em PHP que permite simular o consumo de combustível de um carro, calculando sua autonomia, o custo por quilômetro rodado e a necessidade de revisão.

## 📂 Estrutura do Projeto

carro/
├── Carro.php
├── index.php
└── README.md

## ⚙️ Funcionalidades

- Recebe os seguintes dados via formulário:

  - Modelo do carro
  - Tipo de combustível (Gasolina ou Etanol)
  - Consumo médio (Km por litro)
  - Preço do combustível
  - Quilometragem rodada
  - Capacidade do tanque

- Realiza os seguintes cálculos:
- **Autonomia:** Tanque × Consumo
- **Custo por Km:** Preço do combustível ÷ Consumo
- **Revisão:** Exibe se o carro precisa de revisão (acima de 1000 km)

- Exibe os resultados de forma organizada em uma lista.

## 🖥️ Como executar

1. Certifique-se de que o **XAMPP** está instalado e o **Apache** ativado.
2. Coloque a pasta `carro` dentro de: C:\xampp\htdocs\Desafio\
3. Acesse no navegador: http://localhost/Desafio/carro/

Copiar código 4. Preencha o formulário e clique em **Verificar** para ver os resultados.

## 📊 Exemplo de uso

Suponha que você preencha o formulário com os dados:

- Modelo: Gol
- Tipo de Combustível: Gasolina
- Consumo: 12 km/l
- Preço do Combustível: R$ 5,89
- Quilômetros Rodados: 1250
- Capacidade do Tanque: 50 litros

O sistema exibirá:

- Autonomia: 600 km
- Custo por km: R$ 0,49
- Revisão: **Precisa realizar**

## 🧠 Observações

- A lógica usa `bool` para identificar o tipo de combustível, mas o resultado exibido é independente do tipo.
- A revisão é recomendada apenas após 1000 km rodados.

## 📄 Licença

Este projeto tem fins educacionais e pode ser modificado livremente.

---

Desenvolvido com 🚘 em PHP.

