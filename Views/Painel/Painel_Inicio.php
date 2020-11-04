<a class="btn btn-danger" href="<?php echo BASE_URL; ?>Painel">Acessar Modulo Gratuito</a>
<a class="btn btn-success" href="<?php echo BASE_URL; ?>controle_alunos">Controle de Alunos</a>
<div class="container-fluid">

   <div style="text-align: center;" class="row"> 
        <?php foreach($AllCursos as $curso):  ?>
    <div class="col-sm-4">
   <div style="cursor: pointer;" class="img_curso">
        <img style="border-radius: 10px" class="img-fluid" src="<?php echo BASE_URL;?>assets/images/<?php echo $curso['imagem']; ?>">

        <div>
          <?php echo $curso['nome'];  ?><br>
          <strong style="color: #dd9999"><a class="btn btn-primary " href="<?php echo BASE_URL;?>Painel_Inicio/editar/<?php echo $curso['id']; ?>">Editar</a><a class="btn btn-danger" href="<?php echo BASE_URL;?>Painel_Inicio/excluir/<?php echo $curso['id']; ?>">Excluir Modulo</a></strong>
        </div>
      </div>     
    </div>

  <?php endforeach; ?>
   	
   </div>
       







</div>