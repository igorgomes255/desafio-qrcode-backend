## Desafio QRCode

## Passo a passo para rodar o projeto

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

Instalar as dependências do projeto

```sh
composer install
```

Assim que o docker estiver rodando, rodar as migrações

```sh
php artisan migrate
```
