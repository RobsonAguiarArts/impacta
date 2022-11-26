<?php
    if(!empty($_GET['idprodutos']))
    {
      
      include_once('config.php');
      
      $id = $_GET['idprodutos'];

      $sqlSelect = "SELECT *FROM produtos WHERE idprodutos=$id";

      $result = $conexao->query($sqlSelect);

      if($result->num_rows>0)
      {
        $sqlDelete= "DELETE FROM produtos WHERE idprodutos=$id";
        $resultDelete = $conexao->query($sqlDelete);
      }
    }
    
      header('Location: sistema.php?pg=relatorio_produtos');
    
 ?>