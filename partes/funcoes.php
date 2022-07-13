<?php 

include '../conexao/conectar.php';

if($_GET['acao'] == 'cadastrar'){

  mysqli_query($conecta,"INSERT INTO produtos(idprod,nome,cor) VALUES ('','$_POST[produtos]','$_POST[cor]')"); 
  mysqli_query($conecta,"INSERT INTO preco(preco) VALUES ('$_POST[precos]')");  

  header('Location:../index.php?pagina=inicio');
}

if($_GET['acao'] == 'alterar'){

  mysqli_query($conecta,"UPDATE produtos SET nome='$_POST[produtos]' WHERE idprod=$_POST[id]"); 
  mysqli_query($conecta,"UPDATE preco SET preco='$_POST[precos]' WHERE idpreco=$_POST[id]");  

  header('Location:../index.php?pagina=inicio');
}

if($_GET['acao'] == 'excluir'){
  
  mysqli_query($conecta,"DELETE FROM produtos WHERE idprod=$_POST[id]"); 
  mysqli_query($conecta,"DELETE FROM precos WHERE idpreco=$_POST[id]"); 

  header('Location:../index.php?pagina=inicio');

}

?>