<div class="formulario">
<form action="" method="post">

  <label>Nome:</label>
  <input type="text" name="produtos">
  <label>Preços:</label>
  <input type="text" name="precos">
  <label>Cor:</label>
  <select name="cor">
    <option value="Vermelho">Vermelho</option>
    <option value="Azul">Azul</option>
    <option value="Amarelo">Amarelo</option>
  </select>

  <div class="btns">
   <input type="submit" name="" value="Buscar">
   <button><a href="index.php?pagina=cadastrar">Inserir</a></button>
  </div>

</form>

<table>
  <tr>
    <th>Nome</th>
    <th>Preço</th>
    <th>Cor</th>
  </tr>
<!--   <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr> -->

  <?php 

    $sql = mysqli_query($conecta,'SELECT `idprod`, `nome`, `cor`,`preco` FROM `produtos`,`preco` WHERE idprod=idpreco;');
    while ($dado=mysqli_fetch_array($sql)) {


      $cor = $dado['cor'];
      
      $preco=0;
      
      if($cor == 'Azul' && $cor == 'Vermelho'){
        
        $desconto = ($dado['preco']*20)/100;
        $preco = $dado['preco'] - $desconto;

      }

      if($cor == 'Amarelo' && $dado['preco'] > 50.0){
        
        $desconto = ($dado['preco']*5)/100;
        $preco = $dado['preco'] - $desconto;

      }

      if($cor == 'Amarelo'){
        
        $desconto = ($dado['preco']*10)/100;
        $preco = $dado['preco'] - $desconto;

      }

      $preco_final = 'R$' . number_format($preco, 2, ',', '.');



      echo "<tr>";
      echo "<td>$dado[nome]</td>";
      echo "<td>$preco_final</td>";
      echo "<td>$dado[cor]</td>";

      echo "<td>
        <form method='post' action='index.php?pagina=alterar'>
          <input type='hidden' name='id' value='$dado[idprod]'/>
          <input type='submit' value='Alterar'/>
        </form>
      </td>";
      echo "<td>
        <form method='post' action='partes/funcoes.php?acao=excluir'>
          <input type='hidden' name='id' value='$dado[idprod]'/>
          <input type='submit' value='Excluir'/>
        </form>
      </td>";

      echo "<tr>";

    }

  ?>
</table>
</div>

<!-- 

1)  Crie uma página com dois campos PRODUTOS, PREÇOS, COR.
2)  Crie botões de INSERÇÃO, ATUALIZAÇÃO e de EXCLUSÃO.
3)  Monte uma tabela (HTML) para Listar os Produtos.
4)  Bônus: Crie um Filtro Básico para a página.
a)  Filtrar por Nome
b)  Filtrar por Cor. Em um campo de SELECT.
c)  Filtrar por preço. Quando for MAIOR, MENOR OU IGUAL. 

-->
