# Noticias

Este projeto foi desenvolvido em **Laravel 8**, com a proposta de simular um site de cadastramento e visualização de noticias.


## Requisitos Necessarios
- Versão do PHP mínima 7.3.0
- MySQL - 10.4.10-MariaDB
- Composer

## Etapas
1. Abra o diretorio do projeto  no cmd e execute <b>composer update</b>
2. No diretorio raiz do projeto <b>noticias/</b> no arquivo **.env.example** retire o **.example**, vai deixe **.env**
3. No MySQL crie um Banco de Dados com o nome <b> noticias</b>
4. Caso queira executar sem dados de teste - Abra o diretorio do projeto  no cmd e execute <b>php artisan migrate:fresh</b>.
4. Caso queira executar com dados de teste - Abra o diretorio do projeto  no cmd e execute <b>php artisan migrate:fresh --seed</b>. Esse comando vai criar todas as tabelas e populas as necessárias.
5. Abra o diretorio do projeto  no cmd e execute <b>php artisan serve</b>.
6. Agora é só acessar **http://localhost:8000/**

## Observação

- Caso precise, na pasta raiz do projeto tem um arquivo **noticias.sql**, no qual é o script da banco de dados já populado com as informações mais importantes.