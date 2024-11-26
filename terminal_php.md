### Como iniciar o projeto via terminal?

Para iniciar o projeto via terminal, verifique se possui o PHP instalado corretamente. Execute o comando:

```bash
> php -v
PHP 7.4.13 (cli) (built: Nov 24 2020 12:43:30) ( NTS Visual C++ 2017 x64 )
Copyright (c) The PHP Group
Zend Engine v3.4.0, Copyright (c) Zend Technologies
```

Com o PHP instalado, basta acessar a pasta do projeto pelo terminal. Dentro da pasta `app/` execute o seguinte comando:

```bash
> php -S localhost:80 -t public
[Mon Nov 25 20:56:30 2024] PHP 7.4.13 Development Server (http://localhost:80) started
```

Desta forma, o projeto estará rodando de maneira local no seu PC sem utilizar um servidor HTTP como o **APACHE**. Se preferir utilizar o Apache para executar o projeto, basta adicionar o a pasta `app/` na pasta `root` configurado no seu servidor.