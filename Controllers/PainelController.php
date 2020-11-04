<?php

 class PainelController extends Controller{



   public function index(){


   if(!isset( $_SESSION['adm'])){
     header('Location:'.BASE_URL.'Painel_Login');
    exit();

   }else{

      
      $dados = array(
        'itens'=>array(),
         'qt'=>array()
      );

         $cursos = new CursosPainel();

         $dados['itens'] = $cursos->getCursosIniciante();
         $dados['dt'] = $cursos->getQtaulas();
         $dados['cursos'] = $cursos->getCursosAvancado();

      $this->loadPainel('Painel/Painel',$dados);

}
   }


   public function editar($id){    


   if(!isset( $_SESSION['adm'])){
     header('Location:'.BASE_URL.'Painel_Login');
    exit();

   }else{

      $dados = array(
        'itens'=>array(),
        'editar'=>array(),
        'cursos'=>array()
      );
         $cursos = new CursosPainel();
             
             if(isset($_POST['url']) && !empty($_POST['url'])){
             	$id = addslashes($_POST['id']);
             	$nomemodulo =addslashes($_POST['nomemodulo']);
             	$descricao = addslashes($_POST['descricao']);
             	$titulo = addslashes($_POST['titulo']);
             	$url = addslashes($_POST['url']);

             	$cursos->setEdit($nomemodulo,$descricao,$titulo,$url,$id);
                   
              $dados['cursos'] = $cursos->getCursosAvancado();
             }
         
            
        $dados['editar'] = $cursos->editarAulas($id);

      $this->loadPainel('Painel/Editar',$dados);
}

   }


public function Adicionar_aula(){


   if(!isset( $_SESSION['adm'])){
    header('Location:'.BASE_URL.'Painel_Login');
    exit();

   }else{

   $dados = array(
    'cursos'=>array()
       
      );

        $cursos = new CursosPainel();

      if(isset($_POST['url']) && !empty($_POST['url'])){
         $cursos = new CursosPainel();


      	$nomemodulo = addslashes($_POST['nomemodulo']);
      	$descricao = addslashes($_POST['descricao']);
      	$titulo = addslashes($_POST['titulo']);
      	$url = addslashes($_POST['url']);
       $cursos->addAulas($nomemodulo,$descricao,$titulo,$url);
       header('Location:'.BASE_URL.'Painel');

      }

  
      
     $dados['cursos'] = $cursos->getCursosAvancado();
 

  $this->loadPainel('Painel/Adicionar_Aulas',$dados);
}


}


public function excluir($id){

   if(!isset( $_SESSION['adm'])){
    header('Location:'.BASE_URL.'Painel_Login');
    exit();

   }else{

     $dados = array(
     	'itens'=>array()
     );
    $cursos = new CursosPainel();
       if(isset($id) && !empty($id)){
       
      echo "<script>alert('Quer Realmente Excluir Permanentemente esta aula?')</script>";

     }



    $dados['itens'] = $cursos->getCursosIniciante();
    
   $dados['cursos'] = $cursos->getCursosAvancado();
  



     $this->loadPainel('Painel/Excluido',$dados);
   }
    

}


  



public function excluido($id){


   if(!isset( $_SESSION['adm'])){
    header('Location:'.BASE_URL.'Painel_Login');
    exit();

   }else{
     
  
     if(isset($id) && !empty($id)){
     	$cursos = new CursosPainel();
       $cursos->excluir($id);
       header('Location:'.BASE_URL.'Painel');
       exit();

     }

      
}
    

}










 }




?>