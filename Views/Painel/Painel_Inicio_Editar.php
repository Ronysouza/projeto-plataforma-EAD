<div class="container-fluid">
	<h1>Editar Modulos</h1>
</div>

  <form class="form-control" method="POST">
  	<input class="form-control" type="text" name="id_curso" value="<?php echo $edt_cursos[0]['id']; ?>"><br><br>
  	Nome:<br><br>
  	<input class="form-control" type="text" name="nome" value="<?php echo $edt_cursos[0]['nome']; ?>"><br><br>
  	Modulo:<br>
  	<input class="form-control" type="text" name="modulo" value="<?php echo $edt_cursos[0]['modulo']; ?>"><br><br>
  	Descricao:<br>
  	<input class="form-control" type="text" name="descricao" value="<?php echo $edt_cursos[0]['descricao']; ?>"><br><br>
  	Imagem<br>
  	<img width="100" height="100" src="<?php echo BASE_URL;?>assets/images/<?php echo $edt_cursos[0]['imagem'];?>"><br>
  	<input  type="file" name="imagem"><br><br>
  	<input type="submit" value="Salvar">

  </form>

