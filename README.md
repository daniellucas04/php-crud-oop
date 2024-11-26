### Tecnologias

As seguintes tecnologias foram utilizados neste projeto:

- PHP 7.4
- MySQL 8 / MariaDB 11

### Criação do banco de dados

- Veja como iniciar o banco de dados via [terminal](terminal.md)
- Veja como iniciar o banco de dados via [interface gráfica](interface.md)

### Como inicializar o projeto

Se você seguiu os passos de criação do <a href="#criação-do-banco-de-dados">banco de dados</a> agora falta apenas iniciar o projeto com o PHP.

- Veja como iniciar o projeto usando o [terminal](terminal_php.md)
- Veja como iniciar o projeto usando a [interface gráfica](interface_php.md)

### Usando Docker

Para rodar a aplicação usando o Docker é muito simples.

Primeiro você precisará criar a imagem do ambiente PHP usando o `Dockerfile` da pasta raiz

```bash
# Execute o comando `docker build` dentro da pasta raiz
> docker build -t (nome_da_imagem) .
```

Após ter a imagem criada, basta apenas iniciar um container com ela

> Você pode utilizar o volume para o ambiente de desenvolvimento

```bash
> docker container run -d -p 80:80 -v ${pwd}/app:/var/www/html --name php-crud-oop (nome_da_imagem)
```

E pronto, a aplicação PHP já está rodando no endereço http://localhost. Agora será necessário configurar o container para o banco de dados

Primeiramente, vamos iniciar um container usando a imagem do MySQL

```bash
> docker container run -d -p 3306:3306 -e MYSQL_ALLOW_EMPTY_PASSWORD=1 --name (nome_do_container) mysql
```

Espere até que o MySQL seja completamente incializado e pronto, o serviço `mysql` já está rodando no seu container. Agora basta apenas criar o banco de dados no seu container.

> Esta parte de criação do banco de dados será feita via terminal

Usando o comando `mysql -u root -e "create database if not exists dbuser"` vamos criar o banco de dados **DBUser**.

Usando o comando `mysql -u root DBUser < /database/dbuser.sql` vamos cadastrar a tabela necessária da aplicação no banco de dados.

Dessa maneira o banco já está pronto para uso. Porém ainda é preciso alterar as variáveis de configuração na aplicação.

### Modifique as infromações para conexão do banco

Acesse o arquivo `/app/classes/Connection.php` e altere o valor das variáveis privadas para se conectar ao banco de dados.

```php
  // Modifique o username e password conforme sua conexão do MySQL/MariaDB
  private $host = "localhost";
  private $username = "root";
  private $password = "";
  private $database = "DBUser";
```

Caso tenha seguido o guia [Usando docker](#tecnologias) lembre-se de utilizar o IP do container na variável `$host`

Uma maneira simples de verificar o IP é rodando o comando `mysql` sem nenhum parâmetro. Como por exemplo:

```bash
> mysql
ERROR 1045 (28000): Access denied for user 'Usuario'@'172.17.0.1' (using password: NO)
```

Assim será possível verificar qual o IP do container que está com o MySQL rodando

### Conclusão

Ao seguir todos os passos e guias, agora deve ser capaz de acessar o projeto via http://localhost no seu navegador.
