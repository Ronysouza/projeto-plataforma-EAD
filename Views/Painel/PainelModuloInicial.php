
 <!DOCTYPE html>
<html>
<head>
	  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
   <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL?>assets/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL?>assets/css/estyle.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL?>assets/css/estilo.css">
  <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL?>assets/css/painel.css">
	
	
	<title>Painel</title>
</head>
<body>
 
<div class="container-fluid">
	<table  style="text-align: center;"  width="50%" border="4">
		<tr >
			<th>Total aulas no Curso</th><th>Acoes</th>
		</tr>
		<tr>
			<td > <h1><?php  echo $qtAulas[0]; ?></h1></td>
			<td> <a class="btn btn-secondary" href="<?php echo BASE_URL; ?>PainelModulos/Adicionar_aula_avancado/<?php echo $cursos_id[0]['id']; ?>">Adicionar Aula</a></td>
		</tr>
	</table>
    
     <div class="row">

     	<?php foreach($aulas as $aula):?>
     	<div class="col-sm-4">
     		<div class="iframe_painel">
     			<strong>Nome do modulo</strong>
	       <h2><?php echo $aula['modulo'];  ?></h2>
	       <strong>descricao</strong>
	      <p><?php echo $aula['descricao'];  ?></p>  
	       <strong>titulo</strong>
	      <p><?php echo $aula['titulo'];  ?></p>  
	       <strong>Nome Modulo</strong>
		  <p><?php echo $aula['modulo'];  ?></p>
		<iframe class="col-12 " src="https://www.youtube.com/embed/<?php echo $aula['url'];  ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

	      <p><strong>Acoes</strong></p>  
	      <a class="btn btn-primary" href="<?php echo BASE_URL; ?>PainelModulos/editar/<?php echo $aula['id']; ?>">Editar</a> <a class="btn btn-danger" href="PainelModulos/excluir/<?php echo $aula['id']; ?>">Excluir</a>
     	</div>
     	</div>
     	<?php endforeach;?>
     </div>





  
</div>


<script type="text/javascript" src="<?php echo BASE_URL?>assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php BASE_URL?>assets/js/script.js"></script>
</body>
</html>



