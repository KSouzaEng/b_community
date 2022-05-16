<p align="center"><strong>Bemol Community</strong></p>

## Sobre

Esta feature tem como objetivo ilustrar o cadastro de usuários em um sistema, com a finalidade de posteriormente o mesmo ter acesso ao sistema de comunicação da empresa.

## Construção da API

- Laravel 9.0.
- PHP ^8.1.2
-  Apache 2.4.52
-  MariaDB 10.4.22
-  Composer 2.2.6
  
## Ferramentas para executar o projeto

Para executar o projeto, será necessário instalar os seguintes programas:
- [Laragon : Usado para iniciar o servidor web e fazer o gerenciamento do banco de dados (PHP embutido, MySQL  e Composer)](https://laragon.org/download/index.html)
- [Visual Studio Code: Para desenvolvimento do projeto (ou editor de sua preferência)](https://code.visualstudio.com/download)
Ou a ferramenta de sua prefrência


## Instalação do projeto

Para iniciar o desenvolvimento, é necessário clonar o projeto do GitHub em um diretório segundo as especificações a seguir:
```shell
Caso esteja usando o laragon entre em cd "C:\laragon\www "  e abra o cmd ou terminal nesta pasta e cole o comando a seguir  
git clone https://github.com/KSouzaEng/b_community.git

Caso esteja usando o laragon entre em cd "C:\xampp\htdocs"  e abra o cmd ou terminal nesta pasta e cole o comando a seguir
git clone https://github.com/KSouzaEng/b_community.git
```
##  Configurando a aplicação

Antes de rodar a aplicação é necessário executar os seguintes commandos.

Instala dependências necessárias
```shell
composer install
```
Copia o arquivo de exemplo para fazer a conexão com a base de dados
```shell
cp .env.example .env
```

Gera uma chave aleatório com 32 caracteres para manter os dados da aplicação protegidos
```shell
php artisan key:generate
```

Abra o arquivo .env e inclua nele o nome de sua base de dados. Procure pela linha DB_DATABASE
```shell
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nomedobanco
DB_USERNAME=root
DB_PASSWORD=
```
- OBS : Caso não estiver usando as configurações padrões do Mysql é necesário informar qual gerenciador está usando, o host, a porta, o usuário e a senha

Para gerar as tabelas do banco de dados é necessário executar o comando a seguir.
```shell
php artisan migrate
```

 Para executar a apliacação
```shell
php artisan serve
```


## Melhorias

- Como melhoria do projeto seria interesante expandir o projeto inserindo mais funções, tais como redirecionamento para o canal de atendimento, autenticação do usuário no sistema após o cadastro, listagem de informações do perfil do usuário.
