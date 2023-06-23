<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";

$id = $_GET["id"];
$nome = "";
 $telefone = "";
 $email = "";
 $cnpj = "";
 $estado = "";

 $sql = "select * from ongs where Id_ong = $id";
 $todas_as_ong = mysqli_query($conexao, $sql);
 while($uma_ong = mysqli_fetch_assoc($todas_as_ong)):
    $nome = $uma_ong["Nome"];
    $telefone = $uma_ong["Telefone"];
    $email = $uma_ong["Email"];
    $cnpj = $uma_ong["Cnpj"];
    $Estado = $uma_ong["Estado"];
endwhile;  
?>

 <h1>Ficha da ong</h1>
 <form method="post" action="atualizar.php?id=>">
    Nome: <input name="nome" value="<?php echo $nome;?>"><br>
    telefone:<input name="talefone" value="<?php echo $telefone;?>"><br>
    email:<input name="email" value="<?php echo $email;?>"><br>
    cnpj:<input name="cnpj" value="<?php echo $cnpj;?>"><br>
    estado:<input name="estado" value="<?php echo $estado;?>"><br>
    <button type="submit">Atualizar</button>
</form>
