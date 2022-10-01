<?php
    if(!empty($_GET['idfornecedores']))
    {
      
      include_once('config.php');
      
      $id = $_GET['idfornecedores'];

      $sqlSelect = "SELECT *FROM fornecedores WHERE idfornecedores=$id";

      $result = $conexao->query($sqlSelect);

     if($result->num_rows>0)
     {
      while($forn_data = mysqli_fetch_assoc($result)){
        $nome = $forn_data['nome_forn'];
        $email = $forn_data['email_forn'];
        $endereco = $forn_data['endereco_forn'];
        $bairro = $forn_data['bairro_forn'];
        $cidade = $forn_data['cidade_forn'];
        $estado = $forn_data['estado_forn'];
        $telefone = $forn_data['telefone_forn'];
        $cnpj = $forn_data['cnpj_forn'];
        $data_cad = $forn_data['data_cadastro_forn']; 
      }
     
     }
     else
     {
      header('Location: sistema.php?pg=relatorio_fornecedores');
     }
    }
    else{
      header('Location: sistema.php?pg=relatorio_fornecedores');
    }
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/fornecedores.css">
  <title>Formulário Pizzaria</title>
  
</head>

<body>
  <div class="box">
    <form action="saveEdit.php" method="POST">
    <fieldset>
      <div class="box_center">
      <legend>Cadastro de Fornecedores</legend>
      </div>
      <div class="inputBox">
        <label class="labelInput" for="nome_forn">Razão Social</label>
        <input type="text" name="nome_forn" id="nome_forn" class="inputUser" value="<?php echo $nome?>" required>
      </div>
      <div class="inputBox">
        <label class="labelInput" for="email_forn">Email</label>
        <input type="email" name="email_forn" id="email_forn" class="inputUser"value="<?php echo $email?>" required>
      </div>

      <div class="inputBox">
        <label class="labelInput" for="endereco_forn">Endereço</label>
        <input type="text" name="endereco_forn" id="endereco_forn" class="inputUser"value="<?php echo $endereco?>" required>
      </div>
      <div class="inputBox">
        <label class="labelInput" for="bairro_forn">Bairro</label>
        <input type="text" name="bairro_forn"" id="bairro_forn"" class="inputUser" value="<?php echo $bairro?>"required>
      </div>
      <div class="inputBox">
        <label class="labelInput" for="cidade_forn">Cidade</label>
        <input type="text" name="cidade_forn" id="cidade_forn" class="inputUser" value="<?php echo $cidade?>"required>
      </div>
      <div class="inputBox">
        <label class="labelInput" for="estado_forn">Estado</label>
        <input type="text" name="estado_forn" id="estado_forn" class="inputUser" value="<?php echo $estado?>"required>
      </div>
      <div class="inputBox">
        <label class="labelInput" for="telefone_forn">Telefone</label>
        <input type="tel" name="telefone_forn" id="telefone_forn" class="inputUser" value="<?php echo $telefone?>"required>
      </div>
      <div class="inputBox">
        <label class="labelInput" for="cnpj_forn">CNPJ</label>
        <input type="text" name="cnpj_forn" id="cnpj_forn" class="inputUser"value="<?php echo $cnpj?> "required>
      </div>
      
      <div class="inputBox">
        <label for="data_cadastro_forn">Data de Cadastro:</label>
        <input type="date" name="data_cadastro_forn" id="data_cadastro_forn" value="<?php echo $data_cad?>"required>
      </div>
      <div class="box_center">
        <input type="hidden" name="idfornecedores" value="<?php echo $id?>">
        <input type="submit" name="update" id="update">
      </div>
      <div>
        <a class="back"href="sistema.php?pg=relatorio_fornecedores">voltar</a>
      </div>
    </fieldset>
    </form>
  </div>
</body>
</html>