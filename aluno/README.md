# Avaliação de Aluno em PHP

Este projeto é uma aplicação simples em PHP que permite calcular a média de um aluno com base em três notas informadas. Após o cálculo, o sistema informa se o aluno está **Aprovado**, em **Recuperação** ou **Reprovado**.

## 📂 Estrutura do Projeto

aluno/
├── Aluno.php
├── index.php
└── README.md

## ⚙️ Funcionalidades

- Recebe:
  - Nome do aluno
  - Nome da disciplina
  - Três notas
- Calcula a média aritmética.
- Informa o resultado:
  - **Aprovado** (média ≥ 7.0)
  - **Recuperação** (média ≥ 5.0 e < 7.0)
  - **Reprovado** (média < 5.0)
- Exibe um resumo com nome, disciplina e resultado.

## 🖥️ Como executar

1. Certifique-se de que o **XAMPP** esteja instalado e o **Apache** ativado.
2. Coloque a pasta `aluno` dentro do caminho:
   C:\xampp\htdocs\Desafio\
3. Acesse via navegador:
   http://localhost/Desafio/aluno/
4. Preencha o formulário com os dados do aluno e clique em **Calcular Resultado**.

## 🧮 Exemplo de uso

Suponha que o aluno tenha as seguintes notas:

- Nota 1: 6.5
- Nota 2: 7.0
- Nota 3: 8.0

A média será `7.17` e o aluno será classificado como **Aprovado**.

## 🧠 Observações

- Os campos exigem preenchimento obrigatório.
- As notas podem conter casas decimais (ex: 6.75).

## 📄 Licença

Este projeto tem fins educacionais. Sinta-se à vontade para modificar e aprimorar.

---

Desenvolvido com ❤️ em PHP.

