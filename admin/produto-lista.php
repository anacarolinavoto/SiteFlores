<?php 
include_once "../includes/_banco.php";
include_once "./_header.php";
include_once "_valida.php";

$sql = "SELECT * from produtos WHERE Ativo = true";


$resultado = mysqli_query($conn, $sql);

$total = mysqli_num_rows($resultado);

include_once "./_menu.php";
?>
<main>
<h2 style="text-align: center"> Administração de categorias</h2>

<a href="produto-salvar.php">Inserir</a>
<hr>
<table border= "1">
<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Ações</th>
</tr>

<?php

if ($resultado){

 while ($dado = mysqli_fetch_array($resultado)) {
  
?>
  
<tr>
<td><?php echo $dado ["produtosID"] ?></td>
<td><a href="produto-salvar.php?acao=salvar&id=<?php echo $dado['produtosID'];?>"><?php echo $dado['nome'];?></a></td>
<td><a href="produto-processa.php?acao=excluir&id=<?php echo $dado['produtosID'];?>">Excluir</a></td>
</tr>

<?php
 }

} else {
?>
<tr>
<td colspan="3">Resultados não encontrados</td>
</tr>
<?php
}
?>
<tr>
<td colspan="3">Total de registros: <?php echo $total;?></td>
</tr>

</table>

</main>
<?php
include_once "./_footer.php";
?>