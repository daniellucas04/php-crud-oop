# Tecnologias

![StaticBadge](https://img.shields.io/badge/PHP-7.4.3-blue?style=flat-square)
![StaticBadge](https://img.shields.io/badge/MySQL-blue?style=flat-square)

### Como testar a aplicação

Para testar a aplicação, será necessário se conectar com o banco de dados MySQL. Este guia utiliza o MySQL Workbench para conexão e criação do banco de dados.

# Abra o MySQL Workbench

<img src="https://github.com/daniellucas04/php-crud-oop/assets/97129532/26aacce1-20cb-45a2-be7c-9a1d5eb2a8c5" style="width: 40em; height: 25em" />

### Crie uma nova conexão ou edite uma já existente

<img src="https://github.com/daniellucas04/php-crud-oop/assets/97129532/4225becf-1a72-4f29-88df-140006067354" style="width: 40em; height: 25em" />

### Utilize o seu usuário e senha para conexões MySQL

<img src="https://github.com/daniellucas04/php-crud-oop/assets/97129532/fe3ac7b9-2b5d-4fac-8002-813afe898edb" style="width: 40em; height: 25em" />

### Clique em Testar conexão (Test Connection), uma mensagem de sucesso deverá aparecer.

<img src="https://github.com/daniellucas04/php-crud-oop/assets/97129532/a48233ad-fef8-424f-9a4c-4ee283c562f0" style="width: 40em; height: 25em" />

### Com a conexão pronta. Bastar clicar em OK na tela de confirmação e conexão para finalizar esta primeira etapa.

# Acesse a conexão criada

Ao acessar a conexão, será necessário rodar um script SQL para criação do banco (schema) e da tabela User

### Utilize o atalho `CTRL + SHIFT + O` para abrir um script SQL e selecione o script da pasta `/database`

![image](https://github.com/daniellucas04/php-crud-oop/assets/97129532/922784da-248a-49f8-8747-4164fddbd7ec)

### Assim que o script aparecer para ser executado, utilize o atalho `SHIFT + CTRL + ENTER` para rodar o script

![image](https://github.com/daniellucas04/php-crud-oop/assets/97129532/82a8b25e-8215-4d10-bdfc-82d2070fba9e)

### Com estes passos feitos, vá para Schemas no menu esquerdo e verifique se o Banco de Dados `DBUser` foi criado.

![image](https://github.com/daniellucas04/php-crud-oop/assets/97129532/3cd06a6c-e39d-48a7-9b04-0bfec44cce2a)

### Modifique as infromações para conexão do banco

Acesse o arquivo `/app/classes/Connection.php` e altere o valor das variáveis privadas para se conectar ao banco de dados.

```php
  // Modifique o username e password conforme sua conexão do MySQL Workbench
  // Os valores padrões da aplicação são estes:
  private $_host = "localhost";
  private $_username = "root";
  private $_password = "@Root123";
  private $_database = "DBUser";
```

### Com o banco de dados criado e as informações corretas, você conseguirá rodar o projeto

Abra um terminal dentro da pasta `/app` e digite o seguinte comando:

```md
$ php -S localhost:3000 -t public
```

Com este comando aparecerá a seguinte mensagem seguida da versão do PHP e sistema operacional

```md
$ Development Server (http://localhost:3000) started
```

Agora, basta acessar [http://localhost:3000](http://localhost:3000) no seu navegador e a aplicação estará rodando
