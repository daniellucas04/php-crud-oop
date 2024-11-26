### Como iniciar o banco de dados via interface gráfica?

Este guia usará como interface o software **XAMPP**.

Primeiro, abra o XAMPP e inicie os serviços `Apache` e `MySQL`

![image](https://github.com/user-attachments/assets/9fa5a363-3ffd-481d-85c0-246f623fc449)

Acesse o painel administrativo do MySQL

![image](https://github.com/user-attachments/assets/d2f55e89-68b9-4ccd-ae42-7272a29afd4f)

Acesse a aba **importar** no topo do painel e escolha o arquivo do banco de dados salvo em `app/database/dbuser.sql`.

Clique em importar no final da página para inicializar o processo de importação do banco de dados

### Verificação

Para verificar se o banco de dados foi realmente criado veja se na lista de bancos o banco `dbuser` existe. Se sim, tudo ocorreu bem e o banco de dados está pronto para utilização.
