## Desafio QRCode

<br>
<h1><b>Passo a passo para rodar o projeto</b></h1>
<br>

Clone Repositório

```sh
git clone https://github.com/igorgomes255/desafio-qrcode-backend.git
```

```sh
cd desafio-qrcode-backend/
```

Crie o Arquivo .env

```sh
cp .env.example .env
```

Atualize as variáveis de ambiente do arquivo .env

```dosini
APP_KEY=sua_key

DB_CONNECTION=mysql
DB_HOST=database-qrcode
DB_PORT=3306
DB_DATABASE=nome_que_desejar_db
DB_USERNAME=nome_usuario
DB_PASSWORD=senha_aqui
```

Suba os containers do projeto

```sh
docker-compose up -d
```

Acessar o container

```sh
docker-compose exec php bash
```

Assim que o servidor estiver rodando, rodar as migrações

```sh
php artisan migrate
```

<br>
<h1><b>Sobre a aplicação</b></h1>
<br>

<br>
<h2><b>Rotas da Aplicação</b></h2>
<br>

Todas as rotas disponíveis na API estão sendo descritas abaixo e podem ser acessada após o servidor estiver online....

<br>
<h3><b>Dados do Usuário</b></h3>
<br>

`/api/data`

Esta rota fornece ao usuário da API um CRUD completo de cadastro, leitura, atualização e deleção de novos dados para o usuário.

<br>
<h4><b>POST /api/data</b></h4>
<br>

Esta rota será responsável pelo cadastro de novos dados do usuário na aplicação. É esperado um corpo de requisição e não é necessário um token de autorização.

#### **Corpo de requisição**:

```json
{
    "name": "User",
    "github": "www.linkedin.com",
    "linkedin": "www.github.com"
}
```

#### **Corpo de resposta**:

```json
{
    "data": {
        "id": 1,
        "name": "User",
        "github": "www.linkedin.com",
        "linkedin": "www.github.com"
    }
}
```

<br>

---

<br>
<h4><b>GET /api/data</b></h4>
<br>

Rota responsável pela listagem de todos os dados criados.

#### **Corpo de resposta**:

```json
{
    "data": [
        {
            "id": 1,
            "name": "User",
            "github": "www.linkedin.com",
            "linkedin": "www.github.com"
        },
        {
            "id": 2,
            "name": "User 2",
            "github": "www.linkedin.com",
            "linkedin": "www.github.com"
        }
    ]
}
```

<br>

---

<br>
<h4><b>GET /api/data/:id</b></h4>
<br>

Rota responsável pela listagem dos dados de um id em especifico.

#### **Corpo de resposta**:

```json
{
    "id": 2,
    "name": "User 2",
    "github": "www.linkedin.com",
    "linkedin": "www.github.com"
    "created_at": "2023-03-28T19:40:50.000000Z",
    "updated_at": "2023-03-28T19:40:50.000000Z"
}
```

<br>

---
