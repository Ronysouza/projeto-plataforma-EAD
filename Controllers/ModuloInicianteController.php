<?php


class ModuloInicianteController extends Controller{



  public function index(){

   
      if(!isset($_SESSION['id'])){
   header('Location:'.BASE_URL.'Login');
  exit();

 }else{
   
      
 $dados = array(
 	'alunos'=>array(),
  'aulas_modulo_iniciante'=>array()
 );

 $cursos = new Cursos();
   $alunos = new Alunos();     
     
  $dados['aulas_modulo_iniciante'] = $cursos->getModuloIniciante();
  $dados['alunos'] = $alunos->getAlunosCursos();



             $status_cont = new ContaBlock();

   if($status_cont->getTipoStatus()){
     
         $this->loadTemplate('Videos_Modulo_Iniciante',$dados);  
      }else{

          header('Location:'.BASE_URL.'contaBloqueada');
    exit();
      }



  


}

  }


  public function aula_modulo_iniciante($id){

  	  if(!isset($_SESSION['id'])){
   header('Location:'.BASE_URL.'Login');
  exit();

 }else{

   $dados = array(
   	'alunos'=>array(),
      'video_aulas'=>array(),
       'aulas_modulo_iniciante'=>array()
   );

$alunos = new Alunos(); 
 $cursos = new Cursos();  
  
//if(!$alunos->getIsInscritos()){
 
   $dados['video_aulas'] = $cursos->getVideoAulas($id);
    $dados['alunos'] = $alunos->getAlunosCursos();
     $dados['aulas_modulo_iniciante'] = $cursos->getModuloIniciante();
  
    $status_cont = new ContaBlock();

   if($status_cont->getTipoStatus()){

          $this->loadTemplate('Videos_Modulo_Iniciante',$dados);
      }else{
       
          header('Location:'.BASE_URL.'contaBloqueada');
    exit();
      }



    
  
  // }else{
  //  header('Location: login');
  // } 
}


  }





public function sair(){
  unset($_SESSION['id']);
  header('Location: Login');
}





}





?>