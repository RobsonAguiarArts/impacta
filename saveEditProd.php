<?php
  include_once('config.php');

  if(isset($_POST['update']))
  {
    $id=$_POST['idprodutos'];
    $nome_produto = $_POST['nome_produto'];
    $quantidade = $_POST['quantidade'];
    $data_entrega = $_POST['data_entrega'];
    
    $sqlUpdate = "UPDATE produtos  SET nome_produto='$nome_produto', quantidade='$quantidade', data_entrega='$data_entrega' WHERE idprodutos ='$id'";
   
    $result = $conexao->query($sqlUpdate);

  }
  header('Location: sistema.php?pg=relatorio_produtos');
  