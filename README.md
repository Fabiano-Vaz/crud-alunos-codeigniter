# DOCUMENTAÇÃO

Sistema de crud alunos usando como linguagem base PHP, contendo também, JS e JQUERY, SQL.

## PROJETO

PARA ACESSAR CLIQUE NO LINK ABAIXO: 

[http://crud-alunos.42web.io/](http://crud-alunos.42web.io/) 

****Atenção, como estou utilizando um servidor gratuito, (infinityfree) o sistema está com baixo desempenho. Para melhor desempenho, recomendo fazer download e executar em uma maquina local, ou um servidor profissional.


## INSTALAÇÃO

#### Comandos do git

Baixando o código do projeto:

```
git clone https://github.com/Fabiano-Vaz/crud-alunos-codeigniter.git
```

Manter fonte local atualizado:
```
git pull
```

## BANCO DE DADOS:

### Importação do banco (Incluso os INSERTs):

Segue o link:
[DATABASE.SQL](https://github.com/Fabiano-Vaz/crud-alunos-codeigniter/tree/main/public/db) 
Também encontra-se localizado no diretório (crud-alunos-codeigniter/tree/main/public/db/database.sql) do projeto.

Basta executar este arquivo em seu workbench, phpMyAdmin...(etc)

Em seguida vc deve alterar a seguinte linha de código:

(crud-alunos-codeigniter/application/config/database.php)
```PHP
$active_group = 'default';
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost', //DEIXE O HOSTNAME COMO LOCALHOST
	'username' => 'epiz_30951158',
	'password' => 'cbVLSMPexjmruyW',
	'database' => 'epiz_30951158_database',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
```


### Banco próprio:
Deverá ser cliado um banco de dados mySQL com uma tabela de "alunos". Para facilitar, use a instrução a seguir:

```SQL
CREATE TABLE `alunos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `endereco` varchar(300) NOT NULL,
  `foto_base64` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
```
Após criado o banco, vc deve alterar o seguinte arquivo:

(crud-alunos-codeigniter/application/config/database.php)
```PHP
$active_group = 'default';
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',        //NOME DO SEU SERVIDOR LOCAL
	'username' => 'usuario',          //SEU USUARIO
	'password' => 'senha',            //SUA SENHA
	'database' => 'squema',           //NOME DO SEU BANCO DE DADOS
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
```

## URL DO SERVIDOR

Altere a seguinte linha no arquivo de configurações do projeto para funcionar as rotas:

(crud-alunos-codeigniter/application/config/config.php)
```PHP
$config['base_url'] = 'http://crud-alunos.42web.io/';
```


### Links úteis e referências

* [infinityfree](https://infinityfree.net/) - infinityfree - Hospedagem gratuita

* [codeigniter](https://codeigniter.com/) - Codeigniter
 
* [bootdey](https://www.bootdey.com/) - Componentes para layout

* [Referencia de estudo](https://www.youtube.com/channel/UCc58Rjf-L7_9U4ZAG6VcKAw) - Tutoriais basicos de codeigniter

* [lightbox](https://lokeshdhakar.com/projects/lightbox2/) - Plugin para abrir modal de imagens

* [Jquery.Paginate](https://github.com/Fabiano-Vaz/jquery-paginate) - Plugin para paginação de elementos

* [dropify](https://jeremyfagis.github.io/dropify/) - Plugin para arrastar e soltar arquivos

Outros:

Font Awesome, JQUERY, BOOTSTRAP
