<?php
    if(isset($_POST['submit']))
    {
     
      include_once('config.php');

      $nome_produto = $_POST['nome_produto'];
      $quantidade = $_POST['qtd_produto'];
      $data_entrega = $_POST['data_entrega'];

      
      $result = mysqli_query($conexao,"INSERT INTO produtos(nome_produto,quantidade,data_entrega) VALUES('$nome_produto','$quantidade','$data_entrega')");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/fornecedores.css">
  <title>Formulário de produtos pizzaria</title>
  
</head>

<body>
  <div class="box">
    <form action="sistema.php?pg=produtos" method="POST">
    <fieldset>
      <div class="box_center">
      <legend>Cadastro de Produtos</legend>
      </div>
      <div class="inputBox">
        <label class="labelInput" for="nome_produto">Nome do Produto</label>
        <input type="text" name="nome_produto" id="nome_produto" class="inputUser" required>
      </div>
      <div class="inputBox">
        <label class="labelInput" for="qtd_produto">Quantidade</label>
        <input type="number" name="qtd_produto" id="qtd_produto" class="inputUser" required>
      </div>
      <div class="inputBox">
        <label class="labelInput" for="data_entrega">Data de entrega</label>
        <input type="datetime-local" name="data_entrega" id="data_entrega" class="inputUser" required>
      </div>
      <div class="box_center">
      <input type="submit" name="submit" id="submit">
      </div>
      <div>
        <a class="back"href="sistema.php?pg=sistema.php">voltar</a>
      </div>
    </fieldset>
    </form>
  </div>
</body>

</html>