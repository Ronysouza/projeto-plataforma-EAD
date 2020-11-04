<?php

class Modulo_AvancadoController extends Controller{


  
  public function index(){

    if(!isset($_SESSION['id'])){
   header('Location:'.BASE_URL.'Login');
  exit();

 }else{


  	$dados = array(
    'cursos'=>array(),
    'alunos'=>array()
  	);
    
    $alunos = new Alunos();
    $cursos = new Cursos();
    $dados['cursos'] = $cursos->getCursos();
    $dados['alunos'] = $alunos->getAlunosCursos();
       
   //echo $dados['alunos'][0]['privilegio'];exit();
   
   $privilegio = explode(',', $dados['alunos'][0]['privilegio']);

   if(!in_array('avancado', $privilegio)){



        $status_cont = new ContaBlock();

   if($status_cont->getTipoStatus()){
     
         echo "string";

     $this->loadTemplate('Modulo_Iniciante',$dados); 
}else{
    header('Location:'.BASE_URL.'contaBloqueada');
   // exit();
}

   }else{
           $status_cont = new ContaBlock();

   if($status_cont->getTipoStatus()){

     
        $this->loadTemplate('Modulo_Avancado',$dados);
      }else{
          
          header('Location:'.BASE_URL.'contaBloqueada');
    
      }

   }


 
  	//$this->loadTemplate('cursos',$dados);

     }
  }





  public function entrar($id_curso){
     if(!isset($_SESSION['id'])){
    header('Location:'.BASE_URL.'Login');
    exit();

  }else{

   $dados = array(
    'cursos_videos'=>array(),
     'alunos'=>array()
   );
 
 $alunos = new Alunos();     
$cursos = new Cursos();


 

  $dados['alunos'] = $alunos->getAlunosCursos();
 $dados['cursos_videos'] = $cursos->getCursosVideos($id_curso);
          

     $status_cont = new ContaBlock();

   if($status_cont->getTipoStatus()){

        $this->loadTemplate('Videos_Modulo_Avancado',$dados);
      }else{

          header('Location:'.BASE_URL.'contaBloqueada');
   // exit();
      }




}

  }




 public function Videos($id,$id_curso){

   if(!isset($_SESSION['id'])){
    header('Location:'.BASE_URL.'Login');
    exit();

  }else{

       
   $dados = array(
    'cursos_videos'=>array(),
     'alunos'=>array(),
     'Videos'=>array(),
     'Inscritos'=>array()
   );
 
   $alunos = new Alunos();     
   $cursos = new Cursos();
   
        $dados['Inscritos'] = $alunos->getIsInscritos();
        
           $privilegio = explode(',',$dados['Inscritos']['privilegio']);

            if(in_array('avancado', $privilegio)){
                     
                $dados['alunos'] = $alunos->getAlunosCursos();
              $dados['cursos_videos'] = $cursos->getCursosVideos($id_curso);
               $dados['Videos'] = $cursos->Videos($id);
         



                $status_cont = new ContaBlock();

   if($status_cont->getTipoStatus()){

         $this->loadTemplate('Videos_Modulo_Avancado',$dados);  
      }else{

          header('Location:'.BASE_URL.'contaBloqueada');
   // exit();
      }



  


            }else{


              header('Location: Login');

            }
          
       
   



          }

 }





public function sair(){
  unset($_SESSION['id']);
  header('Location: Login');
}







}










?>