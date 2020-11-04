<center>
	<div class="container">
	<h1>Excluir este aluno?</h1>
	 	
</div>
	<div class="container">
	 
	<strong>Nome: </strong> <?php  echo $alunos[0]['nome']; ?><br><br><br>
	
</div>
<hr>	
<h3><a  href="<?php echo BASE_URL; ?>controle_alunos/excluido_aluno/<?php echo $alunos[0]['id'];  ?> ">Para excluir o Aluno <?php echo $alunos[0]['nome'];  ?> Clique aqui</a></h3>
		
</center>
