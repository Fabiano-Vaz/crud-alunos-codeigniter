###################
CRUD CodeIgniter
###################

Este projeto é um modelo simples de CRUD em codeigniter, desenvolvido apenas para fins de estudos.
Nele contém operações simples de banco, como, listar, cadastrar, editar e excluir produtos. Também tem modelos de formulários, 
declaração de helpers, criação de novos controllers e models, desmembramento de template, etc...

************
DB
************

     create table usuarios (id integer auto_increment primary key, 
     nome varchar(255), email varchar(255), senha varchar(255));

     create table produtos (id integer auto_increment primary key,
     nome varchar(255), descricao text, preco decimal(10,2), usuario_id integer);


*********
Resources
*********

-  `User Guide <https://codeigniter.com/docs>`_
-  `Contributing Guide <https://github.com/bcit-ci/CodeIgniter/blob/develop/contributing.md>`_
-  `Language File Translations <https://github.com/bcit-ci/codeigniter3-translations>`_
-  `Community Forums <https://forum.codeigniter.com/>`_
-  `Community Wiki <https://github.com/bcit-ci/CodeIgniter/wiki>`_
-  `Community Slack Channel <https://codeigniterchat.slack.com>`_
-  `Fonte de Lucas Genari <https://www.youtube.com/channel/UCc58Rjf-L7_9U4ZAG6VcKAw>`_
