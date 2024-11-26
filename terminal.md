### Como iniciar o banco de dados via terminal?

Primeiro, verifique se possua o MySQL ou MariaDB instalado. Execute o seguinte comando no seu terminal:

```
> mysql --version
mysql  Ver 15.1 Distrib 10.4.32-MariaDB, for Win64 (AMD64), source revision c4143f909528e3fab0677a28631d10389354c491
```

Inicie o serviço MySQL para realizar o acesso e criar o banco de dados do projeto.

```
> net start mariadb
O serviço MariaDB foi iniciado com **sucesso**
```

Use as credenciais configuradas para acessar o servidor. Por padrão, o usuário **root** é utilizado em ambiente de desenvolvimento e não possui senha.

```
> mariadb -u root
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 3
Server version: 11.6.2-MariaDB mariadb.org binary distribution

Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

MariaDB [(none)]>
```

Após conseguir acessar o servidor, acesse o arquivo `app/database/dbuser.sql` copie seu conteúdo e cole no terminal para que o banco de dados seja criado

### Executar o arquivo SQL de maneira direta

Para importar o banco de dados via terminal sem copiar e colar o conteúdo do arquivo, primeiro será necessário criar o banco de dados com o comando:

```
mysql -u root -e "create database if not exists (nome_do_banco)"
```

Após criação do banco execute o comando para importar banco de dados:

```
mysql -u root dbuser < caminho/para/dbuser.sql
```

> Se estive executando o script pela pasta `database/` não será necessário adicionar todo o caminho para o arquivo.

### Verificação

Para validar se o banco de dados foi mesmo criado. Execute o comando `show databases` para exibir os bancos criados no servidor. Nesse caso o banco **dbuser** deverá aparecer no resultado.