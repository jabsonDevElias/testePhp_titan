<?php 

  include 'partes/header.php';

  $pagina = (isset($_GET['pagina']))?$_GET['pagina']:0;

  switch($pagina){

    case 'inicio':
     include 'partes/inicio.php';
     break;

    case 'cadastrar':
     include 'partes/cadastrar_produto.php';
     break;
    
    case 'alterar':
     include 'partes/alterar_produto.php';
     break;

    case 'excluir':
     include 'partes/excluir.php';
     break;

   default:
     include 'partes/inicio.php';
     break;
  }

  include 'partes/footer.php';

?>