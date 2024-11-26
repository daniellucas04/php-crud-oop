### Tecnologias

As seguintes tecnologias foram utilizados neste projeto:

- PHP 7.4
- MySQL 8 / MariaDB 11

### Criação do banco de dados

- Veja como iniciar o banco de dados via [terminal](terminal.md)
- Veja como iniciar o banco de dados via [interface gráfica](interface.md)

### Modifique as infromações para conexão do banco

Acesse o arquivo `/app/classes/Connection.php` e altere o valor das variáveis privadas para se conectar ao banco de dados.

```php
  // Modifique o username e password conforme sua conexão do MySQL/MariaDB
  private $_host = "localhost";
  private $_username = "root";
  private $_password = "";
  private $_database = "DBUser";
```

### Como inicializar o projeto

Se você seguiu os passos de criação do <a href="#criação-do-banco-de-dados">banco de dados</a> agora falta apenas iniciar o projeto com o PHP.

- Veja como iniciar o projeto usando o [terminal](terminal_php.md)
- Veja como iniciar o projeto usando a [interface gráfica](interface_php.md)

### Conclusão

Ao seguir todos os passos e guias, agora deve ser capaz de acessar o projeto via http://localhost no seu navegador.