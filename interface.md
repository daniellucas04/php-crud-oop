### Como iniciar o banco de dados via interface gráfica?

Este guia usará como interface o software **XAMPP**.

Primeiro, abra o XAMPP e inicie os serviços `Apache` e `MySQL`

> Adicionar imagem dos serviços iniciados

Acesse o painel administrativo do MySQL

> Adicionar imagem do phpMyAdmin

Acesse a aba **importar** no topo do painel e escolha o arquivo do banco de dados salvo em `app/database/DBUser_User.sql`.

> Exibir botão para importar

Clique em importar para inicializar o processe de importação do banco de dados

### Verificação

Para verificar se o banco de dados foi realmente criado veja se na lista de bancos o banco `dbuser` existe. Se sim, tudo ocorreu bem e o banco de dados está pronto para utilização.