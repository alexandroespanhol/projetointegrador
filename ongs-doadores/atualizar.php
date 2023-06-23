<?php
include "../includes/conexao.php";
$id = $_GET["id"];

$nome = $_POST["nome"];
$sql = "select * from ongs where Id_ong = $id";
 $todas_as_ong = mysqli_query($conexao, $sql);
 while($uma_ong = mysqli_fetch_assoc($todas_as_ong)):
    $nome = $uma_ong["nome"];
 endwhile; 
 ?>
 <h1>Editar ong <?php echo $id; ?></h1>

 

