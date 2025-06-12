# Teste 2 - Consumo de API com Laravel HTTP Client

## Objetivo
Consumir a The Cat API utilizando o HTTP Client do Laravel com autenticação via API Key.

## Setup

1. Clone o projeto. não precisas mais uma vez dar os seguintes comandos para baixar as depedencias,pois, fiz menção de comitar tamém o arquivo .env e a pasta vendor

### não precisas dar estes comandos abaixo:
composer install
cp .env.example .env
php artisan key:generate

2. dá o comando na raiz do projecto para abrir o servidor do laravel: php artisan serve

3. agora acessa no seu navegador o seguinte endereço: http://localhost:8000/cat

### o retorno no navegador tem que ser algo do tipo:

{
  "status": "success",
  "data": [
    {
      "id": "abc123",
      "url": "https://cdn2.thecatapi.com/images/abc123.jpg",
      "width": 1200,
      "height": 800
    }
  ]
}


### obs: 

1. a chave foi configurada no arquivo .env com esta linha no final: CAT_API_KEY=live_Z3ktiEIn1WhSyps42wf9fDl5JDk4AFXdfBQdhjrNkVn3hH6vYNaKh2xfJDpXDYzm

2. Endpoint criado para consumir a API:
http://localhost:8000/cat

3. a resposta para essa endpoint deverá ser algo do tipo:

{
  "status": "success",
  "data": [
    {
      "id": "abc123",
      "url": "https://cdn2.thecatapi.com/images/abc123.jpg",
      "width": 1200,
      "height": 800
    }
  ]
}
