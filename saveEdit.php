<?php
  include_once('config.php');

  if(isset($_POST['update']))
  {
    $id= $_POST['idfornecedores'];
    $nome = $_POST['nome_forn'];
    $email = $_POST['email_forn'];
    $endereco = $_POST['endereco_forn'];
    $bairro = $_POST['bairro_forn'];
    $cidade = $_POST['cidade_forn'];
    $estado = $_POST['estado_forn'];
    $telefone = $_POST['telefone_forn'];
    $cnpj = $_POST['cnpj_forn'];
    $data_cad = $_POST['data_cadastro_forn'];
    
    $sqlUpdate = "UPDATE fornecedores  SET nome_forn='$nome', email_forn='$email', endereco_forn='$endereco', bairro_forn='$bairro', cidade_forn='$cidade', estado_forn='$estado', telefone_forn='$endereco', cnpj_forn='$cnpj', data_cadastro_forn='$data_cad' WHERE idfornecedores ='$id'";
   
    $result = $conexao->query($sqlUpdate);

  }
  header('Location: sistema.php?pg=relatorio_fornecedores');
?>