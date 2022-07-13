<form action="partes/funcoes.php?acao=alterar" method="post" class="formulario">

  <?php 

   $id=$_POST['id'];
   $sql = mysqli_query($conecta,"SELECT `idprod`, `nome`, `cor`,`preco` FROM `produtos`,`preco` WHERE idprod=$id LIMIT 1");
   while ($dado=mysqli_fetch_array($sql)) {
   	   $html  = '';
       $html .= "<input type='hidden' name='id' value=$id>";
       $html .= "<input type='text' name='produtos' value=$dado[nome]>";
       $html .= "<input type='text' name='precos' value=$dado[preco]>";
       $html .= "<input type='text' value='$dado[cor]'' readonly >";    
   }

   echo $html;  
   

  ?>

  <div class="btns">
  <button><a href="index.php?=inicio">Voltar</a></button>
  <input type="submit" name="" value="Atualizar">
  </div>
</form>