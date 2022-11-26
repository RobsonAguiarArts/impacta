<?php
    if(!empty($_GET['idfornecedores']))
    {
      
      include_once('config.php');
      
      $id = $_GET['idfornecedores'];

      $sqlSelect = "SELECT *FROM fornecedores WHERE idfornecedores=$id";

      $result = $conexao->query($sqlSelect);

      if($result->num_rows>0)
      {
        $sqlDelete= "DELETE FROM fornecedores WHERE idfornecedores=$id";
        $resultDelete = $conexao->query($sqlDelete);
      }
    }
    
      header('Location: sistema.php?pg=relatorio_fornecedores');
    
 ?>