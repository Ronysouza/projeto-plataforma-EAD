<h1>controle alunos</h1>
 <h4>Alunos Cadastrados na Plataforma : <?php echo count($alunos) ; ?> Alunos</h4>

<div class="row">

 <div class="container">
  <div class="container-fluid ">

       	<?php foreach($adm as $item):  ?>
        <div style="overflow-y: hidden;" class="container">Nome:<?php echo $item['nome'];  ?></div>
        <div style="overflow-y: hidden;" class="container">E-mail:<?php echo $item['email'];  ?></div>
        
        <div class="container">Senha:<strong style="color: red"><?php echo $item['senha'];  ?></strong></div>
         
         <a class="btn btn-secondary" href="<?php echo BASE_URL; ?>controle_alunos/editar_adm/<?php echo $item['id'];?>">Editar</a><a class="btn btn-danger" href="<?php echo BASE_URL; ?>controle_alunos/excluir_adm/<?php echo $item['id'];?>">Excluir</a>
         <div ><input type="text" name="pesquisar" id="buscar" placeholder="buscar">
         <div id="receber_buscar" >cxvxzcv</div> 
         </div>
         <hr>
         <?php endforeach;  ?>
         </div>  



 
	</div><hr><br><br>




	<div class="col-sm-12 form-control">
      
        <div class="container-fluid ">
       	<?php foreach($alunos as $aluno):  ?>
        <div style="overflow-y: hidden;" class="container">Nome:<?php echo $aluno['nome'];  ?></div>
        <div style="overflow-y: hidden;" class="container">E-mail: <?php echo $aluno['email'];  ?> </div>
        <div style="overflow-y: hidden;" class="container">Data:<?php echo $aluno['hora'];  ?></div>
        <div style="overflow-y: hidden;" class="container">Senha:<strong style="color: red"><?php echo $aluno['senha'];  ?></strong></div>
        <div style="overflow-y: hidden;" class="container">Privilegio: <?php echo $aluno['privilegio'];  ?></div>
         <a class="btn btn-secondary" href="<?php echo BASE_URL; ?>controle_alunos/editar_alunos/<?php echo $aluno['id'];?>">Editar</a><a class="btn btn-danger" href="<?php echo BASE_URL; ?>controle_alunos/excluir_alunos/<?php echo $aluno['id'];?>">Excluir</a>
         <hr>
         <?php endforeach;  ?>
         </div>  
       
      
 
		

	</div>
	
	
</div>