 

  <div class="topo_principal">
    <div class="menu_mobile">
    <div class="img_logo">

      <img height="50" src="assets/images/ronymods.jpg">
       <p style="margin-left: 30px">Nome do Aluno: <strong><?php echo $alunos[0]['nome']; ?></strong></p>
    </div>
  

  

  </div>
    
  <div style="color: #fff" class="menu_mobile_float">

  MENU
    <a href=""><p>Acessar Modulo</p></a>
      <a class="btn btn-danger" href="">Fechar Menu</a>
   

  </div>
  
  <div class="topo">
<div class="container topo_menu">
    <div class="int_1">
   <img height="50" src="assets/images/ronymods.jpg">
    <p style="margin-left: 30px">Nome do Aluno: <strong><?php echo $alunos[0]['nome']; ?></strong></p>
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
 <a href="<?php echo BASE_URL; ?>Modulo_Avancado">HOME</a>

      
  </div>
   
  <hr>  


 <div class="sub_titulo">
   	<div class="titulo">
   	<h2>Curso Modding do Zero ao Profissional</h2>
        <a class="btn btn-danger" target="_blank" href="">Download dos Programas </a>

   	
   	</div>
   
   	<div class="fechar ">   		   			
   		 
  		FECHAR MENU
  		 
  	</div>
  		<div class="nome_modulo">
         
         <?php   

               if(isset($Videos[0]['modulo'])){
                ?>
                      <h2><?php echo $Videos[0]['modulo']; ?></h2>
                <?php
               }else{
                ?>
                 <h2><?php echo $cursos_videos[0]['modulo']; ?></h2>

                 <?php
               }



         ?>
                

   		
   		 </div >

 		<div style="margin: 10px;"><strong><?php  if(!isset($Videos[0]['descricao'])){
                 echo "Area de Alunos";
 		}else{
                echo $Videos[0]['descricao'];
 		} ?></strong></div>

   </div>
  
  <div style="border-radius: 10px; height: 500px;" class="banner_princ">
  	 
  

 	<div class="banner_video">

 		<div class="video_flex">
 		
         
         <?php if(!isset($Videos[0]['url'])){

         	?>
         	<iframe style="border: 0;padding: 0;"  src="https://www.youtube.com/embed/tCOCtc8UCZE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <?php
         }else{
         	?>

   <iframe style="border: 0;padding: 0;"  src="<?php echo $Videos[0]['url']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          
             <?php

         } ?>

 		 
 		

 		</div>

 	</div>
  <div class="banner_menu">
  
                      
              <?php     

                  if(!isset($Videos[0]['url'])){
                    ?>
                     <p style="background-color: #ddee99">  <strong style="color: #dd9999">Conteúdo do Curso </strong>
                    <?php

                  }else{
                     ?>
                     <p style="background-color: #ddee99">  <strong style="color: #dd9999">Voçê está assistindo aula: </strong><?php  echo $Videos[0]['descricao'];?></p>

                     <?php

                  }

          
                   foreach($cursos_videos as $aulas){
                     ?>                     
                    <a href="<?php echo BASE_URL; ?>Modulo_Avancado/Videos/<?php echo $aulas['id']; ?>/<?php echo $aulas['id_curso']; ?>"><p><?php echo $aulas['titulo']; ?></p></a>
                     <?php
                       } 
                     ?>   
                    
        
    


  	  
		
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

 








 