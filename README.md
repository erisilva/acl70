<p align="center"><img src="http://www.contagem.mg.gov.br/novoportal/wp-content/themes/pmc/images/logo-prefeitura-contagem.png"></p>

## Sobre

Sistema de ACL. Uso como base para criar meus projetos. 

O ProtRH foi constuído com a framework [Laravel](https://laravel.com/), na versão 7.x e usa como front-end [Bootstrap 4.5](https://getbootstrap.com/).

Faz uso também das seguintes bibliotecas:

- [laravel-fpdf](https://github.com/codedge/laravel-fpdf)
- [typeahead](https://github.com/corejavascript/typeahead.js)
- [bootstrap-datepicker](https://github.com/uxsolutions/bootstrap-datepicker)

## Requisitos

Os requisitos para executar esse sistema pode ser encontrado na [documentação oficial do laravel](https://laravel.com/docs/6.x):

- PHP >= 7.2.5
- BCMath PHP Extension
- Ctype PHP Extension
- Fileinfo PHP extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

## Instalação

Executar a migração das tabelas com o comando seed:

php artisan migrate --seed

Serão criados 4 usuários de acesso ao sistema, cada um com um perfíl de acesso diferente.

Login: adm@mail.com senha:123456, acesso total.
Login: gerente@mail.com senha:123456, acesso restrito.
Login: operador@mail.com senha:123456, acesso restrito, não pode excluir registros.
Login: leitor@mail.com senha: 123456, somente consulta.

## Funcionalidades

- Operadores* (usuários do sistema)
- Perfís de acesso
- Permissões

* na saúde o termo usuário se refere ao usuário do sus por isso uso o termo operador para não confudir quem irá utilizar o sistema, mas é tranquilo mudar.

## Prefeitura Municipal de Contagem

[www.contagem.mg.gov.br](http://www.contagem.mg.gov.br/novoportal/)

## Contribuições

Caso queira contribuir com melhorias para esse sistema basta enviar um e-mail para erivelton.silva@contagem.mg.gov.br.

## Guia de intalação

Requer:

- Servidor apache com banco de dados MySQL instalado, se aplicável, conforme requisitos mínimos
- [Composer](https://getcomposer.org/download/) instalado
- [Git client](https://git-scm.com/downloads) instalado

Dica: [CMDER](https://cmder.net/) é um substituto do console (prompt) de comandos do windows que já vem com o git client dentre muitas outras funcionalidades

### clonar o reposítório

git clone https://github.com/erisilva/acl70.git

### criar o banco de dados

para mysql

CREATE DATABASE nome_do_banco_de_dados CHARACTER SET utf8 COLLATE utf8_general_ci;

### configurações iniciais

criar o arquivo .env de configurações:

php -r "copy('.env.example', '.env');"

editar o arquivo .env com os dados de configuração com o banco.

gerando a key de segurança:

php artisan key:generate

iniciando o store para os anexos:

php artisan storage:link

### migrações

php artisan migrate --seed

### executando

php artisan serve

## Licenças

O sistema de protocolos é código aberto licenciado sob a [licença MIT](https://opensource.org/licenses/MIT).


