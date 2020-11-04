
 
<div class="container-fluid">
	<h1><strong style="color: #dd9999">Aulas do Modulo Gratuito</strong></h1>
	<hr>
	<table  style="text-align: center;"  width="50%" border="4">
		<tr >
			<th>Total aulas no Curso</th><th>Acoes</th>
		</tr>
		<tr>
			<td > <h1><?php echo $dt[0]; ?></h1></td>
			<td> <a class="btn btn-secondary" href="<?php echo BASE_URL; ?>Painel/Adicionar_Aula">Adicionar Aula</a></td>
		</tr>
	</table>
    
     <div class="row">

     	<?php foreach($itens as $item):?>
     	<div class="col-sm-4">
     		<div class="iframe_painel">
     			<strong>Nome do modulo</strong>
	       <h2><?php echo $item['id_curso'];  ?></h2>
	       <strong>descricao</strong>
	      <p><?php echo $item['descricao'];  ?></p>  
	       <strong>titulo</strong>
	      <p><?php echo $item['titulo'];  ?></p>  
	       <strong>Nome Modulo</strong>
		  <p><?php echo $item['nome_modulo'];  ?></p>
		<iframe class="col-12 " src="https://www.youtube.com/embed/<?php echo $item['url'];  ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

	      <p><strong>Acoes</strong></p>  
	      <a class="btn btn-primary" href="<?php echo BASE_URL; ?>Painel/editar/<?php echo $item['id']; ?>">Editar</a> <a class="btn btn-danger" href="Painel/excluir/<?php echo $item['id']; ?>">Excluir</a>
     	</div>
     	</div>
     	<?php endforeach;?>
     </div>





  
</div>



