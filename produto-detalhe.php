<?php

include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
$id = $_GET['id'];
$tipo = $_GET['tipo'];

?>
<div class="d-flex justify-content-center" id="pdetalhe">
<div class="container">
<h1><?php echo $produtos[$id]['nome'];?></h1>
<img style='width: 400px; height: 350px;' src='./content/<?php echo $produtos[$id]['imagem'];?>'>

<div class="m-4">
<p><strong> Categoria: </strong><?php echo $produtos[$id]['categoria'];?></p>
<p><strong> Preço: </strong><?php echo $produtos[$id]['preco'];?></->
<p style="width: 20cm; margin-left: 150px;"><strong> Descrição: </strong><?php echo $produtos[$id]['descricao'];?></p>
</div>
<div class="mt-4" id="formapagamento"> 
    <h1><strong>Forma de Pagamento</strong></h1>
    <p><img src="./content/pix.png"> Pix</p>
    <p><img src="./content/cartao.png"> Cartão</p>
    <p><img src="./content/dinheiro.png"> Dinheiro</p>
</div>

</div>
</div>
<div class="row" style="text-align: center">
    <div  class="col"><a href="index.php" class="btn btn-primary">Voltar</a></div>
    <div class="col"><a href="contato.php" class="btn btn-primary">Comprar</a></div>
</div>
<?php
include_once './includes/_footer.php';
?>