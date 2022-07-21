<?php

include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>


<div class="conteiner" id="index">
   <h2>Promoção</h2>
   <div class="row m-3">
   <?php 
 
   for ($i=0; $i < 6; $i++) {
   ?>
   <div class="card">
     <a href="produto-detalhe.php?id=<?php echo $i;?>&tipo=promocao"><img class="card-img-top" style='height: 250px;'src="./content/<?php echo $produtos[$i]['imagem'];?>" alt="Card image cap"></a>
      <div class="card-body">
       <h5 class="card-title"><?php echo $produtos[$i]['nome']; ?></h5>
       <p class="card-text"><?php echo $produtos[$i]['descricao']; ?></p>
       <a href="produto-detalhe.php?id=<?php echo $i;?>&tipo=promocao" class="btn btn-primary">Comprar</a>
      </div> 
   </div> 
   <?php
   }
   ?> 
   </div>
</div>


<?php
include_once './includes/_footer.php';
?>