## API Listra

Esse é o back-end utilizado pelo app-listra para realizar suas consultas de empréstimo disponivel.

### Clonando o repositório

Para clonar o repositório, rode o seguinte comando no terminal:

```
git clone https://github.com/devmosilva/api-listra.git
```

### Criando arquivo .env

Para criar o arquivo .env, execute o seguinte comando:

```
cp .env.example .env
```

### Subindo os containers do projeto

Para subir os containers do projeto, execute o seguinte comando:

```
docker-compose up -d
```

### Acessando o container app com o bash

Para acessar o container app com o bash, execute o seguinte comando:

```
docker-compose exec app bash
```

### Instalando as dependências do projeto

Para instalar as dependências do projeto, execute o seguinte comando:

```
composer install
```

### Gerando a key do projeto Laravel

Para gerar a key do projeto Laravel, execute o seguinte comando:

```
php artisan key:generate
```

### Executando as migrate e os seeds

Para executar as migration, execute o seguinte comando:

```
php artisan migrate
```

Para popular o banco de dados para testar a aplicação, execute o seguinte comando:

```
php artisan db:seed --class=VehicleSeeder
```

### Acessando o projeto

Para acessar o projeto, acesse o seguinte endereço em seu navegador:

```
http://localhost:8484
```
