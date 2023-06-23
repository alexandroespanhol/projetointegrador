<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
?>
<h1>Nova Ongs</h1>
<p>Vamos cadastrar uma Ongs novo no sistema.</p>
<form action="inserir.php" method="post">
    Nome: <input name="nome" required maxlength="50">
   Telefone: <input name="telefone" required maxlength="50">
   Email: <input name="email" required maxlength="50">
   Cnpj: <input name="cnpj" required maxlength="30">
   Estado:<input name="estado"required maxlength="2">
    <br>
    <button type="submit">Salvar</button>
</form>
<?php
include "../includes/rodape.php";
?>
