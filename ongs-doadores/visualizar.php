<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";
$id = $_GET["id"];

$nome = "";
$telefone = "";
$Email = "";
$cnpj = "";
$Estado = "";

$sql = "select * from ongs where Id_ong = $id";
$todas_as_ong = mysqli_query($conexao, $sql);
while($uma_ong = mysqli_fetch_assoc($todas_as_ong)):
    $nome = $uma_ong["Nome"];
    $telefone = $uma_ong["Telefone"];
    $email = $uma_ong["Email"];
    $cnpj = $uma_ong["Cnpj"];
    $estado = $uma_ong["Estado"];
endwhile;  
?>

<h1>Ficha da ong</h1>
nome: <?php echo $nome . "" ?> <br>
telefone: <?php echo $telefone . "" ?> <br>
email: <?php echo $email . "" ?> <br>
cnpj: <?php echo $cnpj . "" ?> <br>
estado: <?php echo $estado . "" ?> <br>
</form>
<?php
mysqli_close($conexao);
include "../includes/rodape.php";
?>