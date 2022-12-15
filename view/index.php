<!-- Listagem de registros -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>MVC PHP</title>
</head>
<body>
    <div class="container container-sm m-5">
      <form name="newUser" method="POST" action="./controller/clientsController">
        <h1>Usuário</h1>
        <div class="w-50 p-2">
          <label class="form-label">Nome</label>  
          <input type="text" name="nome" class="form-control">  
        </div>
        <div class="w-50 p-2">
          <label class="form-label">CPF</label>  
          <input type="text" name="email" class="form-control">  
        </div>
        <div class="mb-5 w-50 p-2">
          <label class="form-label">Endereço</label>  
          <input type="text" name="fone" class="form-control">        
        </div>

        <div class="mb-5">
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
        </form>
    <h3>Lista de Clientes</h3>
    <div class="content table table-striped">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>EMAIL</th>
            <th>TELEFONE</th>
          </tr>
        </thead>
        <tbody>
        <!--criando um laço de repetição para listar os dados da tabela na grade-->
          <?php foreach($resultData as $data):?>
            <tr>
              <!--a estrutura do php abaixo é uma forma mais enxuta de fazer o <\?php echo''?\>-->
              <td><?= $data['id']?></td>
              <td><?= $data['nome']?></td>
              <td><?= $data['cpf']?></td>
              <td><?= $data['endereco']?></td>
            </tr>
            <!--abaixo ele fecha o laço de repetição-->
            <?php endforeach;?>
        </tbody>
      </table>
    </div>
  </div>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>