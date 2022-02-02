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

Deverá ser cliado um banco de dados mySQL com uma tabela de "alunos". Para facilitar, use a instrução a seguir:

```SQL
CREATE TABLE `alunos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `endereco` varchar(300) NOT NULL,
  `foto_base64` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
```

Ou se preferir, pode apenas baixar o banco completo, segue o link:
[DATABASE.SQL](https://github.com/Fabiano-Vaz/crud-alunos-codeigniter/tree/main/public/db) 
Também encontra-se localizado no diretório (crud-alunos-codeigniter/tree/main/public/db/database.sql) do projeto.



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
