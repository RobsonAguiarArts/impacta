<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  
  <title>Login Pizzaria</title>
  
</head>

<body>
  <img src="/img/pizza.jpg" alt="">

  <div class="tela_login">
    <h1>Faça seu Login</h1>
    <form action="testLogin.php" method="POST" class="form_login">
      <input class="input_login" type="email" name="email" placeholder="Email">
      <input class="input_login" type="password" name="senha" placeholder="senha">
      <input type="submit" name="submit" value="Enviar" class="acao_login">
    </form>
    <div class="box">
    <a class="senha" href="login.php">Esqueceu a senha ?</a>
    <a class="cadastro"href="formulario.php">Cadastre-se</a>
  </div>
  </div>
 

</body>

</html>