<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php"
?>


<h1>Ongs-doadores</h1>
<img src="../img/download.png" width="80">
</h1>
<p>
    <a href="novo.php">Adicionar Ongs</a>
</p>
<h2> Listagem de Ongs</h2>
<table border="1">
    <tr>
        <td>Código</td>
        <td>Nome</td>
        <td>Telefone</td>
        <td>Email</td>
        <td>Cnpj</td>
        <td>Estado</td>
    
        <td>Ações</td>
</tr>
<?php
$sql = "select * from ongs";
$todas_as_ong = mysqli_query($conexao, $sql);
while($uma_ong = mysqli_fetch_assoc($todas_as_ong)):
    ?>
    <tr>
        <td><?php echo $uma_ong['Id_ong'];?></td>
        <td><?php echo $uma_ong['Nome'];?></td>
        <td><?php echo $uma_ong['Telefone'];?></td>
        <td><?php echo $uma_ong['Email'];?></td>
        <td><?php echo $uma_ong['Cnpj'];?></td>
        <td><?php echo $uma_ong['Estado'];?></td>
    
    
        <td>
            <a href="Visualizar.php?id=<?php echo $uma_ong['Id_ong'];?>"> 
            "title="Ver completo">Visualizar</a>
            <a href="editar.php?id=<?php echo $uma_ong['Id_ong'];?>">
                Editar
            </a>
            <a href="deletar.php?id=<?php echo $uma_ong['Id_ong'];?>">
            Excluir</a>
</td>
</tr>
        <?php
        endwhile;
        ?>

</table>


<?php
include "../includes/rodape.php";