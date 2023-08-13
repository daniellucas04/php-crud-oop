# Como testar a aplicação

### Utilizando MySQL Workbench

- Abra o MySQL Workbench
- Crie uma nova conexão ou edite uma já existente
- Utilize o seu usuário e senha para conexões MySQL
- Clique em Testar conexão (Test Connection), uma mensagem de sucesso deverá aparecer.
- Clique OK na mensagem de sucesso e também na tela de conexão.

### Acesse a conexão criada

Ao acessar a conexão, será necessário rodar um script SQL para criação do banco (schema) e da tabela User

- Utilize o atalho `CTRL + SHIFT + O` para abrir um script SQL e selecione o script da pasta `/database`
- Assim que o script aparecer para ser executado, utilize o atalho `SHIFT + CTRL + ENTER` para rodar o script
- Com estes passos feitos, vá para Schemas no menu esquerdo e verifique se o Banco de Dados `DBUser` foi criado.

### Com o banco de dados criado, podemos rodar o projeto

Abra um terminal dentro da pasta `/app` e digite o seguinte comando:

```md
$ php -S localhost:3000 -t public
```

Com este comando aparecerá a seguinte mensagem seguida da versão do PHP e sistema operacional

```md
$ Development Server (http://localhost:3000) started
```

Agora, basta acessar [http://localhost:3000](http://localhost:3000) no seu navegador e a aplicação estará rodando
