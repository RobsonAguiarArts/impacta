<?php
    if(isset($_POST['submit']))
    {
      // print_r('Nome: '. $_POST['nome']);
      // print_r('<br>');
        // print_r('Senha: '. $_POST['senha']);
      // print_r('<br>');
      // print_r('Email: '. $_POST['email']);
      //print_r('<br>');
      //print_r('Telefone: '. $_POST['telefone']);
      //print_r('<br>');
      //print_r('sexo: '. $_POST['genero']);
      //print_r('<br>');
      //print_r('Data de Nascimento: '. $_POST['data_nascimento']);
      //print_r('<br>');
      //print_r('Cidade: '. $_POST['cidade']);
      //print_r('<br>');
      //print_r('Estado: '. $_POST['estado']);
      //print_r('<br>');
      //print_r('Endereço: '. $_POST['endereco']);
      include_once('config.php');

      $nome = $_POST['nome_forn'];
      $email = $_POST['email_forn'];
      $endereco = $_POST['endereco_forn'];
      $bairro = $_POST['bairro_forn'];
      $cidade = $_POST['cidade_forn'];
      $estado = $_POST['estado_forn'];
      $telefone = $_POST['telefone_forn'];
      $cnpj = $_POST['cnpj_forn'];
      $data_cad = $_POST['data_cadastro_forn'];

      $result = mysqli_query($conexao,"INSERT INTO fornecedores(nome_forn,email_forn,endereco_forn,bairro_forn,cidade_forn,estado_forn,telefone_forn,cnpj_forn,data_cadastro_forn) VALUES('$nome','$email','$endereco','$bairro','$cidade','$estado','$telefone','$cnpj','$data_cad')");
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
    <form action="sistema.php?pg=fornecedores" method="POST">
    <fieldset>
      <div class="box_center">
      <legend>Cadastro de Fornecedores</legend>
      </div>
      <div class="inputBox">
        <label class="labelInput" for="nome_forn">Razão Social</label>
        <input type="text" name="nome_forn" id="nome_forn" class="inputUser" required>
      </div>
      <div class="inputBox">
        <label class="labelInput" for="email_forn">Email</label>
        <input type="email" name="email_forn" id="email_forn" class="inputUser" required>
      </div>

      <div class="inputBox">
        <label class="labelInput" for="endereco_forn">Endereço</label>
        <input type="text" name="endereco_forn" id="endereco_forn" class="inputUser" required>
      </div>
      <div class="inputBox">
        <label class="labelInput" for="bairro_forn">Bairro</label>
        <input type="text" name="bairro_forn"" id="bairro_forn"" class="inputUser" required>
      </div>
      <div class="inputBox">
        <label class="labelInput" for="cidade_forn">Cidade</label>
        <input type="text" name="cidade_forn" id="cidade_forn" class="inputUser" required>
      </div>
      <div class="inputBox">
        <label class="labelInput" for="estado_forn">Estado</label>
        <input type="text" name="estado_forn" id="estado_forn" class="inputUser" required>
      </div>
      <div class="inputBox">
        <label class="labelInput" for="telefone_forn">Telefone</label>
        <input type="tel" name="telefone_forn" id="telefone_forn" class="inputUser" required>
      </div>
      <div class="inputBox">
        <label class="labelInput" for="cnpj_forn">CNPJ</label>
        <input type="text" name="cnpj_forn" id="cnpj_forn" class="inputUser" required>
      </div>
      
      <div class="inputBox">
        <label for="data_cadastro_forn">Data de Cadastro:</label>
        <input type="date" name="data_cadastro_forn" id="data_cadastro_forn" required>
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