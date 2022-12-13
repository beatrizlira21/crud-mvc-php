<?php

  require_once('./models/Client.php');

  class clientsController{
    private $model;

//instanciando a classe ClienteModel, que é a classe que vai fazer os comando de select no banco de dados
    function __construct(){
      $this->model = new ClientModel();
    }

    function Listagem(){
      //model é o responsável pela ação no banco de dados
      $resultData = $this->model->getAll();
      require_once('./view/index.php');
    }
  }