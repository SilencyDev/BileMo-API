# BileMoProject - 7th project / Php Symfony OpenClassrooms 

[![Codacy Badge](https://app.codacy.com/project/badge/Grade/2d76ecbc4ce2463bacb51a4026b0ba5b)](https://www.codacy.com/manual/SilencyDev/BileMoProject?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=SilencyDev/BileMoProject&amp;utm_campaign=Badge_Grade)

## API informations
* You access to your token via /authentication_token route -> email and password are used as credentials
* You can access to the documentation via the /docs route
* Only fully authenticated user are allowed to make changes related to their profile "owned users"
* Admin has access to every ressources even the ones that aren't linked to their profile "products/clients/users"

## Installation
1. Clonez or download the project :
```
    git clone https://github.com/SilencyDev/BileMoProject
```
2. Configure environnement variables into `.env.local` or `.env`.

3. Download and install vendors with Composer :
```
    composer install
```
4. Create the database :
```
    php bin/console doctrine:database:create
```
5. Create the tables into the database with migration :
```
    php bin/console doctrine:migrations:migrate
```
6. You can load the bilemo fixture as pre-recorded data :
```
php bin/console doctrine:fixtures:load

admin account : test@test.fr password: test
user account : test2@test.fr password: test
```
7. Create SSH Keys ([OpenSSL for Windows](https://slproweb.com/products/Win32OpenSSL.html))
Add your passphrase "JWT_PASSPHRASE=" into `.env.local` or `env`
```bash
$ mkdir config/jwt
$ openssl genrsa -out config/jwt/private.pem -aes256 4096
$ openssl rsa -pubout -in config/jwt/private.pem -out config/jwt/public.pem
```