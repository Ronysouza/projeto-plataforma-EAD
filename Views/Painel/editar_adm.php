<div class="container">
	<h1>Editar Adm</h1>
	 
</div>
<div class="container">
	 
	<form class="form-control" method="POST">
		<input class="form-control" type="text" name="id" value="<?php echo $get_adm[0]['id']; ?>"><br><br>
		Nome:<br>
		<input class="form-control" type="text" name="nome" value="<?php echo $get_adm[0]['nome']; ?>"><br><br>
		email:<br>
		<input class="form-control" type="email" name="email" value="<?php echo $get_adm[0]['email']; ?>"><br><br>
		senha:<br>
		<input class="form-control" type="password" name="senha" value="<?php echo $get_adm[0]['senha']; ?>"><br><br>
		<input type="submit" value="Salvar">
	</form>
</div>