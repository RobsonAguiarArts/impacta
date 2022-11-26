<?php
session_start();
//print_r($_SESSION);
if((!isset($_SESSION['email'])== true and(!isset($_SESSION['senha']) == true))){
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('Location: login.php');
}
$logado = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/sistema.css">
  
  <title>Pagina do Admin</title>
</head>
<body>
<nav class="  navbar navbar-expand-lg  bg-primary " >
  <div class=" container-fluid ">
    <a class="white navbar-brand" href="#">Master Pizza</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class=" nav-link active" aria-current="page" href="sistema.php?pg=home">Inicio</a>
        </li>
     
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cadastro
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item"  href="sistema.php?pg=fornecedores">Cadastro de Fornecedores</a></li>
            <li><a class="dropdown-item" href="sistema.php?pg=produtos">Cadastro de Produtos</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Relatórios
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item"  href="sistema.php?pg=relatorio_fornecedores">Relatorio de Fornecedores</a></li>
            <li><a class="dropdown-item" href="sistema.php?pg=relatorio_produtos">Relatorio de Produtos</a></li>
          </ul>
        </li>
      </ul>    
        <div class="form-inline my-2 my-lg-0">
          <label class="me-3 bem_vindo" >
            <?php
              echo "Bem Vindo: $logado";
            ?>
          </label>
              <a href="sair.php" class="btn btn_login me-2">Sair</a>
      </div>
    </div>
  </div>
</nav>

<main>
  <div class="container-fluid">
    
    <?php
      $pg = "";
      if(isset($_GET['pg'])&& !empty($_GET['pg'])){
        $pg = addslashes($_GET['pg']);
      }
      switch($pg){
        case'produtos': require 'produtos.php';break;
        case'fornecedores': require 'fornecedores.php';break;
        case'relatorio_fornecedores': require 'relatorio_fornecedores.php';break;
        case'relatorio_produtos': require 'relatorio_produtos.php';break;
        case'edit': require 'edit.php';break;
        case'edit_produtos': require 'edit_produtos.php';break;
        case'saveEdit': require 'saveEdit.php';break;
        case'saveEditProd': require 'saveEditProd.php';break;
        default: require'home.php';
      }
    ?>
  </div>
</main>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
</html>