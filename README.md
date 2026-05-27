# Sistema de Cadastro e Login com PHP

Um sistema simples e funcional de registo e autenticação de utilizadores desenvolvido em PHP e MySQL.

## Funcionalidades

- Cadastro de novos utilizadores
- Login e Logout seguro
- Proteção de páginas com sessões PHP
- Senhas encriptadas com `password_hash()`
- Validação de email e formulários
- Interface limpa e responsiva (design minimalista preto e branco)

## Tecnologias Utilizadas

- PHP 8
- MySQL
- PDO com Prepared Statements
- Bootstrap 5
- HTML5 e CSS3
- Git

## Como Executar o Projeto Localmente

1. Clone o repositório:
   git clone https://github.com/AntonioThone/cadastro-login-php.git
   
2. Coloque a pasta dentro do diretório do Apache:Bash/var/www/html/meu_projeto
3. Configure o banco de dados:
  - Crie um banco chamado meu_projeto
  - Execute o script SQL disponível em database.sql

4. Edite o ficheiro config.php com as suas credenciais do MySQL.
5. Acesse no navegador:
  - Cadastro: http://localhost/cadastro-login-php/register.php 
  - Login: http://localhost/cadastro-login-php/login.php


## Estrutura do Projeto

cadastro-login-php/
├── assets/
│   └── css/
├── config.php
├── register.php
├── login.php
├── index.php
├── logout.php
├── test_db.php
├── database.sql
├── README.md
└── .gitignore


## Observações

Projeto desenvolvido para aprendizagem.
Foco em boas práticas de segurança (hash de senhas e Prepared Statements).
Interface responsiva e clean.
