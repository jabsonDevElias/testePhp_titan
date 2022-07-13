<form action="partes/funcoes.php?acao=cadastrar" method="post" class="formulario">

  <label>Produtos:</label>
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
  <button><a href="index.php?pagina=inicio">Voltar</a></button>
  <input type="submit" value="Cadastrar">
  </div>
</form>