<!-- Consultas/regras de negócio -->

<?php

  require_once('./configuration/connect.php');


  class ClientModel extends Connect{
    private $table;
    //a classe abaixo instancia a classe que faz conexão com o banco de dados. O 'parent::__construct() ta fazendo a chamada do método da classe pai, chamando o construtor da classe pai, pra ser utilizado aqui na classe filha
    function __construct(){
      parent::__construct();
      //O atributo table ta recebendo o nome da tabela que foi criada no banco.
      $this->table = 'clients';
    }

    function getAll(){
      $sqlSelect = $this->connection->query("SELECT * FROM $this->table");
      $result = $sqlSelect->fetchAll();
      return $result;
    }

    function newCad(){
      $sqlInsert = $this->connection->prepare("INSERT INTO $this->table (nome, cpf, endereco) VALUE (:nome, :tel, :endereco");

      $sqlInsert->execute(array(
        ':nome'=>$_POST['nome'],
        ':cpf'=>$_POST['cpf'],
        ':endereco'=>$_POST['endereco']
      ));
    }
  }
