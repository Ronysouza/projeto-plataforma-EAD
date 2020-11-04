<div class="row">
 
     	<div class="col-sm-12">
     		<div class="iframe_painel">
     			<strong>Nome do modulo</strong>
	       <h2><?php echo $itens[0]['id_curso'];  ?></h2>
	       <strong>descricao</strong>
	      <p><?php echo $itens[0]['descricao'];  ?></p>  
	       <strong>titulo</strong>
	      <p><?php echo $itens[0]['titulo'];  ?></p>  
	       <strong>Nome Modulo</strong>
		  <p><?php echo $itens[0]['nome_modulo'];  ?></p>
		<iframe class="col-12 " src="https://www.youtube.com/embed/<?php echo $itens[0]['url'];  ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

	      <p><strong>Acoes</strong></p>  
	       <a class="btn btn-danger" href="Painel/excluido/<?php echo $itens[0]['id']; ?>">Excluir</a>
     	</div>
     	</div>
      
     </div>





  
</div>




 