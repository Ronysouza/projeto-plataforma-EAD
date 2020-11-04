<!DOCTYPE html>
<html>
<head>
	  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
   <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL?>assets/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL?>assets/css/estyle.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL?>assets/css/estilo.css">
  <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL?>assets/css/painel.css">
	
	
	<title>Alunos Rony Mods</title>
</head>
<body>
 
  <div  class="container-fluid painel_topo">

        
      


    <div class="container-fluid menu_p">

      <div class="menu_painel">
           <img class="img-fluid" width="50" height="50" src="assets/images/menu.png">
         </div>

       <div class="menu_painel_into">

              <div class="men">    

      <a href="<?php echo BASE_URL; ?>Painel_Inicio">Home</a><br><br>

 <?php foreach( $viewData as $itemMenu): ?>
 <?php endforeach;  ?>
<?php foreach($itemMenu as $menu):   ?>
     <a href="<?php echo BASE_URL; ?>PainelModulos/getModulos/<?php echo $menu['id']; ?>"><?php echo $menu['nome'];  ?></a><br><br>
   <?php endforeach;  ?>
 <a href="<?php echo BASE_URL; ?>AdicionarModulos"><strong style="color: #dd9999">Adicionar Módulo</a><br><br>



    </div>

      </div>




                           <?php                     

foreach ($viewData as $item ) {


 }
 ?>
    <div class="menu">
      <a  href="#">Módulos Avançado -></a>
    </div>
 <?php

 foreach ($item as $itens) {
   ?>
      <div class="menu">
      <a  href="<?php echo BASE_URL; ?>PainelModulos/getModulos/<?php echo $itens['id']; ?>"><?php echo $itens['modulo']; ?></a>
    </div>

   <?php
 }             
   ?>
    <a href="<?php echo BASE_URL; ?>AdicionarModulos"><strong style="color: #dd9999">Adicionar Modulo</a>
        <a class="btn btn-success" href="<?php echo BASE_URL; ?>Painel_Inicio"><strong  >Home</a>




 	 

  </div>

 

<div>

                     
	<?php  $this->loadViewInTemplatePainel($viewName,$viewData);   ?>
</div>

    
    </div>

	









<script type="text/javascript" src="<?php echo BASE_URL?>assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php BASE_URL?>assets/js/script.js"></script>
</body>
</html>