# Teste Multipedidos

## Visão Geral

Este é um projeto PHP/Laravel, empacotado em contêineres Docker e gerenciado pelo Docker Compose. Inclui também testes automatizados que podem ser executados usando `make test`.

## Pré-requisitos

Certifique-se de ter as seguintes ferramentas instaladas:

- [Make](https://www.gnu.org/software/make/manual/make.html)
- [Docker](https://www.docker.com/get-started)
- [Docker Compose](https://docs.docker.com/compose/install/)

## Configuração do Ambiente de Desenvolvimento

**Clone o Repositório:**
   ```bash
   git clone git@github.com:vitorugoc/desafio-multipedidos-vitor.git
   cd desafio-multipedidos-vitor
   ```

## Docker e Docker Compose

Este projeto utiliza Docker para encapsular a aplicação. O Docker Compose é usado para orquestrar os contêineres.
Além disso, possui um Makefile com os principais comandos para facilitar a configuração e definir as principais rotinas.

### Iniciar os Contêineres e Instalar Dependências

```bash
make setup
```

## Configurar Projeto

```bash
cp .env.example .env
make generate-key
```

## Migrar Tabelas e Dados
```bash
make data
```

A aplicação estará disponível em [http://localhost:9000](http://localhost:9000).

O PHPAdmin estará disponível em [http://localhost:9001](http://localhost:9001).

### Parar os Contêineres

```bash
make stop
```

## Testes

Os testes automatizados são escritos utilizando [PHPUnit](https://phpunit.de/) e [Laravel Testing](https://laravel.com/docs/10.x/testing).

### Executar Testes

```bash
make test
```

Isso iniciará a execução dos testes e exibirá os resultados no console.
