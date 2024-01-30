# Site Pessoal

## Description
Nova versão do meu site pessoal

Remoção do Wordpress e refeito em PHP

© 2014-2024

## Development Environment

### PHP server

```bash
$ cd public
```

```bash
$ php -S localhost:8080
```

### Apache server

Editar o arquivo http.conf (usando LAMPP por exemplo)

```bash
$ nano /opt/lampp/apache2/conf/httpd.conf
```

Adicionar um _Alias_ para o diretório **public**

> Alias /fabioschunig "/path/to/repository/fabioschunig-site/public"
> <Directory "/path/to/repository/fabioschunig-site/public">
>     Options Indexes FollowSymLinks Includes ExecCGI
>     AllowOverride All
>     Require all granted
>     Allow from all
> </Directory>
