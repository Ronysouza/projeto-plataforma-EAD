  <div class="topo_principal">
    <div class="menu_mobile">
    <div class="img_logo">

     <img height="50" src="assets/images/ronymods.jpg">
        <p style="margin-left: 30px">Nome do Aluno: <strong><?php echo $alunos[0]['nome']; ?></strong></p>
    </div>
  
 
  <img height="30" src="assets/images/menu.png">

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
         
    </div>
    </div>  


<div class="container banner">
<img class="banner_none" style="border-radius: 10px" width="90" height="50" src="assets/images/logo1.jpg">
 <img class="banner_none"  style="border-radius: 10px" width="90" height="50" src="assets/images/logo2.jpg">
 <img class="banner_none" style="border-radius: 10px" width="90" height="50"  src="assets/images/logo3.jpg">
  
  <a href="<?php echo BASE_URL;?>Modulo_Avancado/sair"><div class="sair">Sair</div></a>

      
  </div>
   
  <hr>
     <div class="alert alert-primary">
          
      <center><a class="alert alert-danger" id="important" href="">ATENÇÃO LEIA !</a><br><bR> <a class="btn btn-success" id="abrir_modal_process" href="">Procedimentos para Acessar <br> os Videos </a></center>

    <div class="modal_process">
      <center><div class="btn btn-danger" id="fechar_modal_process"  >fechar</div></center>
      <div class="div_modal_video">        
      
    <div class="div_modal_important">        
       <h1>Atenção</h1>
       <h1>Conteúdo BLOQUEADO,Este Conteúdo Somente Para Quem é Vip na Plataforma</h1>
    

      </div>

      </div>

    </div>



 <div class="modal_important">
      <center><a class="btn btn-danger" id="fechar_modal_important" href="">fechar</a></center>
      <div class="div_modal_important">        
       <h1>Atenção</h1>
       <P>Certifiquisse de que voçê fez login em uma rede e máquina ao qual voçê ira usar definitivo,a plataforma funcionará somente em uma rede apenas,siga os passos do video ao lado para ter acesso as aulas,os links para dowloads dos programas estao disponível nos módulos em algum lugar desta página,a equipe não dara suporte a jogos que não foram abordados no curso, sobre suporte,tenha certeza que realmente não encontrou nenhuma solução sobre o erro ao qual nao esta conseguindo resolver,o intuito do curso é que voçê aprenda a fazer modding de verdade,voçê só aprenderá a fazer seus próprios mods praticando,então assista as aulas,reassista novamente,e tente criar sozinho,só assim aprenderá virar um verdadeiro MODDER.</P>
       <p>Seja perssistente,nunca desista dos seus objetivos,estude,pratique, quebre barreiras pegue jogos que voçê conheca,fazendo assim voçê ja saberá qual é o objetivo do jogo tornando assim mais fácil a modificação</p>
       <p>Lembre-se de uma coisa,eu não sei de todo o universo dos modding,isso nunca ninguém irá saber,este conhecimento é valioso,muitos querem ter mas não conseguem,não por falta de dinheiro, e sim por falta de tempo  até mesmo de motivação por acharem que tem um KEI baixo,então não compartilhem este curso,guarde pra voçê,nunca se esqueça de uma coisa,os desenvolvedores estão de olho,um vacilo e tudo para, e a FESTA ACABARÁ!!</p>

       <h1>BOM MODDING E BOA SORTE <strong style="color: #1e1e1e;font-size: 20px" >;=)</strong>!</h1>
    

      </div>

    </div>










   



     </div>














 <div class="sub_titulo">
   	<div class="titulo">
   	<h2>Curso Modding do Zero ao Profissional</h2>

   	
   	</div>
   
   	<div class="fechar ">   		   			
   		 
  		FECHAR MENU
  		 
  	</div>
  		<div class="nome_modulo">
   		 	<h2  >Área de Aulas</h2>
   		 </div >

 		<div style="margin: 10px;"><strong>Curso Modding</strong></div>

   </div>
  

  	 
  





 <div class="container-fluid cursos">
 	<div class="row">


    <!-- area de aulas modal -->




  
  <?php

       $privilegio = explode(',',$alunos[0]['privilegio']);
   
   //view cursos basico



   if(!in_array('avancado', $privilegio)){
            ?>
<div class="col-sm-4">
    <a href="<?php echo BASE_URL;?>ModuloIniciante"><div class="img_curso">
        <img style="border-radius: 10px" class="img-fluid img-thumbnail" src="<?php echo BASE_URL;?>assets/images/<?php echo $cursos[0]['imagem']; ?>">
        <div>
         Módulo Gratuito

        </div>
      </div></a>      
    </div>


            <?php



          foreach($cursos as $curso):  ?>
    <div class="col-sm-4">
   <a target="_blank" href="https://api.whatsapp.com/send?phone=5511968369217&text=Eu%20Quero%20Ser%20Vip%20Para%20Adquirir%20o%20Curso%20Completo%20de%20Modding!!"><div  class="img_curso">
        <img style="border-radius: 10px" class="img-fluid" src="<?php echo BASE_URL;?>assets/images/<?php echo $curso['imagem']; ?>">
        <div>
          <?php echo $curso['nome'];  ?>
          <strong style="color: #dd9999"><p>Seja Vip para Desbloquear Todas as Aulas</p></strong>
        </div>
      </div></a>

    </div>

  <?php endforeach;
     
       //view cursos basico
    

   }else{

  

      foreach($cursos as $curso):  ?>

    <div class="col-sm-4">
    <a href="<?php echo BASE_URL;?>ModuloIniciante/entrar/<?php echo $curso['id'];?>">

      <div class="img_curso">
        <img style="border-radius: 10px" class="img-fluid img-thumbnail" src="<?php echo BASE_URL;?>assets/images/<?php echo $curso['imagem']; ?>">
        <div>
          <?php echo $curso['nome'];  ?>
        </div>
      </div></a>
      
    </div>

  <?php endforeach;





   }?>


  

   


    <!-- area de aulas modal -->




 		
 		 



 		

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