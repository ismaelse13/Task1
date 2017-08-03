## Laravel API JWT Boilerplate - GetInfo

Construido em cima de:

* JWT-Auth - [tymondesigns/jwt-auth](https://github.com/tymondesigns/jwt-auth)
* Dingo API - [dingo/api](https://github.com/dingo/api)
* Laravel-CORS [barryvdh/laravel-cors](http://github.com/barryvdh/laravel-cors)

O que eu fiz é uma integração destes três pacotes e uma configuração de alguns métodos de recuperação de autenticação e credenciais.

## Instalação

1. Clone este repositório;
2. Rode `composer install`;
3. Rode `php artisan key:generate` para gerar a chave da aplicação.
4. Rode `php artisan jwt:generate` para gerar a chave do JWT (tokens).
5. Configure seu banco no `.env` (comente tudo para usar um banco SQLite na pasta database);
6. Rode `php artisan migrate` para executar as migrações. 
6. Tome um café, nada para fazer aqui.

Uma vez concluído o processo de criação do projeto, execute o comando `php artisan migrate` para instalar as tabelas necessárias.
Rode `php artisan db:seed` para preencher as tabelas com dados de teste (opcional).

## Recursos

### Alguns controllers de autenticação "Ready-To-Use" 

Você não precisa se preocupar mais com autenticação e recuperação de senha. Eu criei quatro controladores que você pode encontrar no `App\Api\V1\Controllers` para essas operações.

Para cada controlador existe uma rota de configuração já no arquivo `routes/api.php`:

* `POST api/auth/login`, para fazer o login e obter o seu token de acesso;
* `POST api/auth/signup`, para criar um novo usuário em seu aplicativo;
* `POST api/auth/recovery`, para recuperar suas credenciais;
* `POST api/auth/reset`, para redefinir sua senha após a recuperação;

### Um arquivo separado de rotas

Todas as rotas da API podem ser encontradas no arquivo `routes/api.php`. Isso também segue a convenção Laravel 5.3.

### Geração de Chaves

Toda vez que você criar um novo projeto a partir deste repositório, o comando _php artisan jwt: generate_ será executado.

## Configuration

As I already said before, this boilerplate is based on _dingo/api_ and _tymondesigns/jwt-auth_ packages. So, you can find many informations about configuration <a href="https://github.com/tymondesigns/jwt-auth/wiki/Configuration" target="_blank">here</a> and <a href="https://github.com/dingo/api/wiki/Configuration">here</a>.

However, there are some extra options that I placed in a _config/boilerplate.php_ file:

* `sign_up.release_token`: set it to `true` if you want your app release the token right after the sign up process;
* `reset_password.release_token`: set it to `true` if you want your app release the token right after the password reset process;

There are also the validation rules for every action (login, sign up, recovery and reset). Feel free to customize it for your needs.

## Creating Endpoints

You can create endpoints in the same way you could to with using the single _dingo/api_ package. You can <a href="https://github.com/dingo/api/wiki/Creating-API-Endpoints" target="_blank">read its documentation</a> for details. After all, that's just a boilerplate! :)

However, I added some example routes to the `routes/api.php` file to give you immediately an idea.

## Cross Origin Resource Sharing

If you want to enable CORS for a specific route or routes group, you just have to use the _cors_ middleware on them.

Thanks to the _barryvdh/laravel-cors_ package, you can handle CORS easily. Just check <a href="https://github.com/barryvdh/laravel-cors" target="_blank">the docs at this page</a> for more info.