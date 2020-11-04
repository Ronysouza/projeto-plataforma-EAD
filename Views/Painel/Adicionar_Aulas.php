<form class="form-control" method="POST">
	 
 
		Nome Modulo:<br>
	 	 
			
			 
		 
		<input class="form-control" type="text" name="nomemodulo" placeholder="nome do modulo" ><br>
		Descriçao:<br>
		<input class="form-control" type="text" name="descricao" placeholder="descricao" ><br>
		Titulo:<br>
		<input class="form-control" type="text" name="titulo" placeholder="titulo"  ><br><br>
		<table class="table" border="2">
			<tr>
			<td><iframe class="col-12 " src="https://www.youtube.com/embed/<?php echo $edt['url']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>	
			</tr>		
		</table>
		URL do Video:<br>
		<input class="form-control"  type="text" name="url" placeholder="url" ><br>
		<input type="submit" value="SALVAR">

 
	
</form>