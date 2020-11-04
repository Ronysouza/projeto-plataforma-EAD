<?php

class PainelModulosController extends Controller{


   
  public function index(){

  
   if(!isset( $_SESSION['adm'])){
    header('Location:'.BASE_URL.'Painel_Login');
    exit();

   }else{



   $cursos = new CursosPainel();
  $dados = array(
   'cursos'=>array()
  );

      $dados['cursos'] = $cursos->getCursosAvancado();



  $this->loadPainel('Painel/PainelModuloInicial',$dados);

}
  }

  public function getModulos($id_curso){

   if(!isset( $_SESSION['adm'])){
    header('Location:'.BASE_URL.'Painel_Login');
    exit();

   }else{

  $cursos = new CursosPainel();
  $dados = array(
   'cursos'=>array(),
   'aulas'=>array(),
   'qtAulas'=>array(),
    'itens'=>array(),
   'cursos_id'=>array()

  );

   $dados['cursos'] = $cursos->getCursosAvancado();
   $dados['aulas'] = $cursos->getAllAulas($id_curso);
     $_SESSION['id_curso'] = $dados['cursos_id'] = $cursos->getAllCursosAvancado($id_curso);

   $dados['qtAulas'] = $cursos->getQtAulasModulo($id_curso); 
   
   
   $dados['itens'] = $cursos->getCursosIniciante();


  $this->loadView('Painel/PainelModuloInicial',$dados);
}

  	 }




 public function excluir($id){


   if(!isset( $_SESSION['adm'])){
     header('Location:'.BASE_URL.'Painel_Login');
    exit();

   }else{    

             if(isset($id) && !empty($id)){
  $cursos = new CursosPainel();
        $cursos->excluirCursosAvancado($id);
   
           header('Location:'.BASE_URL.'Painel_Inicio');

             }

    }
 }





public function editar($id){

   if(!isset( $_SESSION['adm'])){
     header('Location:'.BASE_URL.'Painel_Login');
    exit();

   }else{
    $dados = array(
   'cursos'=>array(),
   'editar_aulas'=>array()

    );
$cursos = new CursosPainel();
     
  
   
     if(isset($_POST['url']) && !empty($_POST['url'])){

     	$id = addslashes($_POST['id']);
		$nomemodulo = addslashes($_POST['nomemodulo']);
 		$descricao = addslashes($_POST['descricao']);
		$titulo = addslashes($_POST['titulo']);
		$url = addslashes($_POST['url']);

		$cursos->edtAulaModulo($id,$nomemodulo,$descricao,$titulo,$url);
		   

     }
    
       $dados['cursos'] = $cursos->getCursosAvancado();
       $dados['editar_aulas'] = $cursos->editarAulasAvancado($id);

        


 $this->loadPainel('Painel/PainelModuloInicial_Editar',$dados);
}

}




public function Adicionar_aula_avancado($id){



   if(!isset( $_SESSION['adm'])){
    header('Location:'.BASE_URL.'Painel_Login');
    exit();

   }else{
  $dados = array(
   'cursos'=>array()
  );
       if(isset($_POST['url']) && !empty($_POST['url'])){
         $cursos = new CursosPainel();

        $nomemodulo = addslashes($_POST['nomemodulo']);
        $descricao = addslashes($_POST['descricao']);
        $titulo = addslashes($_POST['titulo']);
        $url = addslashes($_POST['url']);
       
     //if($cursos->addAulasModuloAvancado($nomemodulo,$descricao,$titulo,$url,$id)){
      $cursos->addAulasModuloAvancado($nomemodulo,$descricao,$titulo,$url,$id);
     echo "<script>alert('aula Adicionado com sucesso')</script>";
    // }

         
             


       }else{
      echo "<script>alert('Todos os campos devem estar preenchidos ')</script>";
     }

 
 
  $this->loadPainel('Painel/Adicionar_Aula_Avancado',$dados);
}

}







}





?>