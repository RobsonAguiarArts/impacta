<?php
    if(!empty($_GET['idprodutos']))
    {
      
      include_once('config.php');
      
      $id = $_GET['idprodutos'];

      $sqlSelect = "SELECT *FROM produtos WHERE idprodutos=$id";

      $result = $conexao->query($sqlSelect);

     if($result->num_rows>0)
     {
      while($product_data = mysqli_fetch_assoc($result)){
        $nome_produto = $product_data['nome_produto'];
        $quantidade = $product_data['quantidade'];
        $data_entrega = $product_data['data_entrega'];
      }
     
     }
     else
     {
      header('Location: sistema.php?pg=relatorio_produtos');
     }
    }
    else{
      header('Location: sistema.php?pg=relatorio_produtos');
    }
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/fornecedores.css">
  <title>Formulário produtos Pizzaria</title>
  
</head>

<body>
  <div class="box">
    <form action="saveEditProd.php" method="POST">
    <fieldset>
      <div class="box_center">
      <legend>Edição de Produtos</legend>
      </div>
      <div class="inputBox">
        <label class="labelInput" for="nome_produto">Nome do Produto</label>
        <input type="text" name="nome_produto" id="nome_produto" class="inputUser" value="<?php echo $nome_produto?>" required>
      </div>
      <div class="inputBox">
        <label class="labelInput" for="quantidade">Quantidade</label>
        <input type="number" name="quantidade" id="quantidade" class="inputUser"value="<?php echo $quantidade?>" required>
      </div>

      <div class="inputBox">
        <label class="labelInput" for="data_entrega">Data de Entrega</label>
        <input type="datatime-local" name="data_entrega" id="data_entrega" class="inputUser"value="<?php echo $data_entrega?>" required>
      </div>
      <div class="box_center">
        <input type="hidden" name="idprodutos" value="<?php echo $id?>">
        <input type="submit" name="update" id="update">
      </div>
      <div>
        <a class="back"href="sistema.php?pg=relatorio_produtos">voltar</a>
      </div>
    </fieldset>
    </form>
  </div>
</body>
</html>