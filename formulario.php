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

      $nome = $_POST['nome'];
      $senha = $_POST['senha'];
      $email = $_POST['email'];
      $telefone = $_POST['telefone'];
      $sexo = $_POST['genero'];
      $data_nasc = $_POST['data_nascimento'];
      $cidade = $_POST['cidade'];
      $estado = $_POST['estado'];
      $endereco = $_POST['endereco'];

      $result = mysqli_query($conexao,"INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco) VALUES('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/form.css">
  <title>Formulário Pizzaria</title>
  
</head>

<body>
  <div class="box">
    <form action="formulario.php" method="POST">
    <fieldset>
      <legend>Formulario de Login</legend>
      <div class="inputBox">
        <input type="text" name="nome" id="nome" class="inputUser" required>
        <label class="labelInput" for="nome">Nome completo</label>
      </div>
      <div class="inputBox">
        <input type="email" name="email" id="email" class="inputUser" required>
        <label class="labelInput" for="email">Email</label>
      </div>

      <div class="inputBox">
        <input type="password" name="senha" id="senha" class="inputUser" required>
        <label class="labelInput" for="senha">Senha</label>
      </div>
      <div class="inputBox">
        <input type="tel" name="telefone" id="telefone" class="inputUser" required>
        <label class="labelInput" for="telefone">Telefone</label>
      </div>

      <div class="genero">
        <p>Sexo</p>
        <input type="radio" id="feminino" name="genero" value="feminino" required>
        <label for="feminino">Feminino</label>
        <br>
        <input type="radio" id="masculino" name="genero" value="masculino" required>
        <label for="masculino">Masculino</label>
        <br>
        <input type="radio" id="outro" name="genero" value="outro" required>
        <label for="outro">Outro</label>
      </div>
      <div class="inputBox">
        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" name="data_nascimento" id="data_nascimento" required>
      </div>
      <div class="inputBox">
        <input type="text" name="cidade" id="cidade" class="inputUser" required>
        <label class="labelInput" for="cidade">Cidade</label>
      </div>
      <div class="inputBox">
        <input type="text" name="estado" id="estado" class="inputUser" required>
        <label class="labelInput" for="estado">Estado</label>
      </div>
      <div class="inputBox">
        <input type="text" name="endereco" id="endereco" class="inputUser" required>
        <label class="labelInput" for="endereco">Endereço</label>
      </div>
      <input type="submit" name="submit" id="submit">


    </fieldset>
    </form>
  </div>
</body>

</html>