# cfs-php-form
# PHP para quem entende PHP - COMPLETO
### Canal **Clube Full-Stack**

[**Playlist**](https://www.youtube.com/playlist?list=PLyugqHiq-SKehMTK5N3XpKMmdi3JuCNhD/)

- 01 - Para quem é o curso
- 02 - Carregando páginas internas
- 03 - Formulário de contato
- 04 - Validate
- 05 - Tipos de requisição
- 06 - Validação com Flash Messages
- 07 - Enviando email com o phpmailer

*Concluidos *

********************
- 08 - Conexão com o banco de dados usando o PDO
- 09 - Função de cadastro
- 10 - Editando registro do banco de dados
- 11 - Função para atualizar registro do banco de dados
- 12 - Deletando registro do banco de dados
- 13 - PHP para quem entende PHP - COMPLETO

***********************
####++Observações++: 


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

Por **segurança** foi incluido o arquivo **credentials.php** com as variáveis de validação.

Para utilizar renomeie **credentials-sample.php** para **credentials.php**
e altere as informações conforme for utilizar. 
*>> depois mudarei para constantes ;) <<*

```
$emailHost = 'Seu HOST';
$emailUsername = 'Seu Username';
$emailPassword = 'Seu Password';
$myEmail = 'Seu Email';
```

_ _ _
