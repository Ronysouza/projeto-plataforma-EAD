<form class="form-control" method="POST">
	<?php foreach($editar_aulas as $edt_aula): ?>
		<input class="input_id" type="text" name="id" readonly="true"  value="<?php echo $edt_aula['id'];  ?>"><br>
		Nome Modulo:<br>
		<input class="form-control" type="text" name="nomemodulo" value="<?php echo $edt_aula['modulo'];  ?>"><br>
		Descriçao:<br>
		<input class="form-control" type="text" name="descricao" value="<?php echo $edt_aula['descricao'];  ?>"><br>
		Titulo:<br>
		<input class="form-control" type="text" name="titulo" value="<?php echo $edt_aula['titulo'];  ?>"><br><br>
		<table class="table" border="2">
			<tr>
			<td><iframe class="col-12 " src="https://www.youtube.com/embed/<?php echo $edt_aula['url']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>	
			</tr>		
		</table>
		URL do Video:<br>
		<input class="form-control"  type="text" name="url" value="<?php echo $edt_aula['url'];  ?>"><br>
		<input type="submit" value="SALVAR">

	<?php endforeach; ?>
	
</form> 