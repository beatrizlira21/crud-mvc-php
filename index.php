<!-- Rotas/Chamadas de métodos -->
<?php

require_once('./controller/clientsController.php');

$controller = new ClientsController();

//action é literalmente a ação do banco de dados que vai ser executada na classe de model
//no if ternário abaixo ele vai pegar a ação de banco, do controller, vai verificar se houve um retorno dessa ação, caso tenha tido a ação, ele pega o 'a', que é a ação. Caso contrário ele vai pegar a ação Listagem 
$action = !empty($_GET['a']) ? $_GET['a'] : 'Listagem';

//Ta atribuindo ao $controller, a ação do banco, que foi realizada acima.
$controller->{$action}();


