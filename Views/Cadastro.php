
<?php

   $_SESSION['tentativas'] = rand();

?>


<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
	<link rel="stylesheet" type="text/css" href="assets/css/estyle.css">
	<title>Cadastrar</title>
</head>
<body>
	 
	
		
	
	<div class="topo_principal">
		<div class="assets/images/menu_mobile">
		<div class="img_logo">

			 
		</div>
	

	 
	</div>
		
 
	
	<div class="topo">
<div class="container topo_menu">
		<img height="50" src="assets/images/ronymods.jpg">
		<p style="margin-left: 30px">Cadastre-se</p>
		</div>
			<div class="int_2">
				 <img style="border-radius: 10px" width="90" height="50" src="assets/images/logo7.jpg">
         <img style="border-radius: 10px" width="90" height="50"  src="assets/images/logo8.jpg">
         <img style="border-radius: 10px" width="90" height="50" src="assets/images/logo9.jpg">

					</div>
		</div>  


<div class="container banner">
<img class="banner_none" style="border-radius: 10px" width="90" height="50" src="assets/images/logo1.jpg">
 <img class="banner_none" style="border-radius: 10px" width="90" height="50"  src="assets/images/logo2.jpg">
 <img class="banner_none" style="border-radius: 10px" width="90" height="50"  src="assets/images/logo3.jpg">
 <img  style="border-radius: 10px" width="90" height="50" src="assets/images/logo4.jpg">
 <img  style="border-radius: 10px" width="90" height="50" src="assets/images/logo5.jpg">
 <img  style="border-radius: 10px" width="90" height="50"  src="assets/images/logo6.jpg">

 			
 	</div>
 	 
 	<hr>



   <div class="sub_titulo">
   	<div class="titulo">
   	<h2>Curso Modding </h2>

   	
   	</div>
   
   	<div class="fechar ">   		   			
   		 
  		Área de Cadastro
  		 
  	</div>
  		<div class="nome_modulo">
   		 	<h2  >Cadastre-se</h2>
   		 </div >

 		<div style="margin: 10px;"><strong>Módulos:Do Básico ao Avançado / Mod Menu / Criptografia e Descriptografia / Proteção e Muito Mais</strong></div>

   </div>
  
  <div style="border-radius: 10px;" class="banner_princ">
  	 
  

 	<div >

 	
<div class="container_login">
	<div class="login">

		<form class="form-control" method="POST">
			<div><h1 style="display: inline-block;" >Cadastre-se </h1><strong style="color: #dd9999"> Para acessar os Cursos</strong><br><a href="<?php echo BASE_URL;?>Login">fazer login clique aqui</a></div>


		     <label>Nome<br></label>	
			<input class="form-control" type="text" name="nome" placeholder="Seu Nome" required><br><br>
		    <label>E-Mail<br></label>	
			<input class="form-control" type="email" name="email" placeholder=" Digite um E-mail"><br><br>
			<label>Senha<br></label>
          	<input class="form-control" type="text" name="senha" placeholder="Escolha uma Senha" required><br>
            <div class="tentat"><h1><?php echo $_SESSION['tentativas'];  ?></h1></div>
             
            <input id="input_tent" type="text" name="tentativas" placeholder="não sou robô"><br><br>
             <?php if(isset($error) && !empty($error)):  ?>
                 <div class="alert alert-danger"><?php echo $error; ?></div>
         <?php endif;  ?>
         <?php if(isset($error_codigo) && !empty($error_codigo)):  ?>
                 <div class="alert alert-warning"><?php echo $error_codigo; ?></div>
         <?php endif;  ?>


			<input class="alert alert-success" type="submit" value="Cadastrar">

			
		</form>
		
	</div>
</div>

  
	
</div>
</div>
<hr>
<div class="container rodape">
	<div class="rodape">
	  <div><img height="40"src="assets/images/php.png"><img height="40"src="assets/images/php.png"><img height="40"src="assets/images/php.png"></div>
	  <div><strong style="color: #fff">Desenvolvido por R7WebDesign</strong></div>
      <div><strong style="color: #fff" >Proprietário e Desenvolvedor da Plataforma: Curso Modificação de Jogos Android </strong></div>

	</div>

</div>






 	

</div>
<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>
















