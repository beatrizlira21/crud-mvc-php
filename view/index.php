<!-- Listagem de registros -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MVC PHP</title>
</head>
<body>
  <h1>Lista de Clientes</h1>
  <div class="content">
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
            <td><?= $data['email']?></td>
            <td><?= $data['fone']?></td>
          </tr>
          <!--abaixo ele fecha o laço de repetição-->
          <?php endforeach;?>
      </tbody>
    </table>
  </div>
</body>
</html>