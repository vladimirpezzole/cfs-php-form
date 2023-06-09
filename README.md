# cfs-php-form
# PHP para quem entende PHP - COMPLETO


Para instalar tenha o GIT instalado e clone o repositório:

```bash
git clone https://github.com/vladimirpezzole/cfs-php-form.git
```

Depois verifique as configurações do **Docker Compose**, **Dockerfile** e as variáveis em **.env** e execute:

```bash
docker compose up -d
```
*Obs. se a versão do **Docker CLI versão 2.0.0**, for anterior, use >> **`docker-compose`** com hífen(-).*

Após baixar execute `composer install` ou `composer update`

***********************
### Canal **Clube Full-Stack**

[**Playlist**](https://www.youtube.com/playlist?list=PLyugqHiq-SKehMTK5N3XpKMmdi3JuCNhD/)

- 01 - Para quem é o curso
- 02 - Carregando páginas internas
- 03 - Formulário de contato
- 04 - Validate
- 05 - Tipos de requisição
- 06 - Validação com Flash Messages
- 07 - Enviando email com o phpmailer
- 08 - Conexão com o banco de dados usando o PDO
- 09 - Função de cadastro
- 10 - Editando registro do banco de dados
- 11 - Função para atualizar registro do banco de dados
- 12 - Deletando registro do banco de dados
- 13 - PHP para quem entende PHP - COMPLETO

***********************
[**Falta Concluir **](https://github.com/vladimirpezzole/cfs-php-form/issues)

- Resolver o Warning! no Send e o Flash!
- Resolver a questao da PASTA HTML

***********************
### Observações:


**FILTER_SANITIZE_STRING** foi *@deprecated* no **PHP 8.1**

para sanitizar foi usada a função:
`sanitizeString($string)`

salva em **functions.php** *(custom.php)*

```
function sanitizeString($string){
  $str = preg_replace('/\x00|<[^>]*>?/', '', $string);
  $sanitized = str_replace(["'", '"'], ['&#39;', '&#34;'], $str);
  return $sanitized;
};

```
no **validate.php** também foi usada a **função** 
`htmlspecialchars($string, ENT_QUOTES) `
indicada pela **documentação**, por garantia:

```
case 's':
        $string = sanitizeString($request[$field]);
        $validate[$field] = htmlspecialchars($string, ENT_QUOTES);
        break;
```

_ _ _

Por **segurança** foi incluído o arquivo **credentials.php** com as CONSTANTES de validação.

Para utilizar renomeie **credentials-sample.php** para **credentials.php**
e altere as informações conforme for utilizar. 

```
// * To mailtrap.io >> 
define('MY_HOST', 'Seu HOST');
define('MY_USERNAME', 'Seu Username');
define('MY_PASSWORD', 'Seu Password');
define('MY_EMAIL', 'Seu Email');

// * Banco de Dados
define('USER_DB', 'Usuário BD');
define('PWD_DB', 'Senha BD');
```

_ _ _
