<div class="container-fluid">
<h1>Excluir Modulos</h1>
</div>


 
<div class="container-fluid">

   <div style="text-align: center;" class="row"> 
        <?php foreach($AllCursos as $curso):  ?>
    <div class="col-sm-4">
   <div style="cursor: pointer;" class="img_curso">
        <img style="border-radius: 10px" class="img-fluid" src="<?php echo BASE_URL;?>assets/images/<?php echo $curso['imagem']; ?>">

        <div>
          <?php echo $curso['nome'];  ?><br>
          <strong style="color: #dd9999"><a class="btn btn-danger" href="<?php echo BASE_URL;?>Painel_Inicio/excluir_cursos/<?php echo $curso['id']; ?>">Excluir Modulo</a></strong>
        </div>
      </div>     
    </div>

  <?php endforeach; ?>
   	
   </div>
       







</div>