<?php


class controle_alunosController extends Controller{


  public function index(){ 

   if(empty($_SESSION['adm'])){
    header('Location:'.BASE_URL.'Login');
    exit();

   }else{


  	$dados=array(
      'alunos'=>array(),
       'adm'=>array()
  	);
  	$alunos = new Alunos();
  	$adm = new Adm();
	$cursos = new CursosPainel();
     
       $dados['alunos'] = $alunos->getAllAlunos();
       $dados['adm'] = $adm->getAlladm();







	$dados['cursos'] = $cursos->getCursosAvancado();
   




  	 $this->loadPainel('Painel/controle_alunos',$dados);
    }
  }




  public function editar_adm($id){
     if(empty($_SESSION['adm'])){
    header('Location:'.BASE_URL.'Login');
    exit();

   }else{

  	   	   $dados=array(
      'alunos'=>array(),
       'adm'=>array(),
       'get_adm'=>array()
  	);
  	$alunos = new Alunos();
  	$adm = new Adm();
	$cursos = new CursosPainel();
        
        
       $dados['alunos'] = $alunos->getAllAlunos();
       $dados['adm'] = $adm->getAlladm();

          if(isset($id) && !empty($id)){
          	 $dados['get_adm'] = $adm->getAdm($id);
            }

            if(isset($_POST['nome']) && !empty($_POST['nome'])){
              $nome = addslashes($_POST['nome']);
              $email =  addslashes($_POST['email']); 
              $senha = addslashes($_POST['senha']);
              $id = addslashes($_POST['id']);
             
              $adm->edtAdm($nome,$email,$senha,$id);

            }





	$dados['cursos'] = $cursos->getCursosAvancado();


  	    $this->loadPainel('Painel/editar_adm',$dados);
      }

  }


 public function excluir_adm ($id){
   if(empty($_SESSION['adm'])){
    header('Location:'.BASE_URL.'Login');
    exit();

   }else{



  if(isset($id) && !empty($id)){

    echo "<script>alert('quer realmente excluir este Adm?');</script>";

 	$dados=array(
      'alunos'=>array(),
       'adm'=>array()
  	);
  	$alunos = new Alunos();
  	$adm = new Adm();
	$cursos = new CursosPainel();
     
       $dados['alunos'] = $alunos->getAllAlunos();
       $dados['adm'] = $adm->getAlladm();







	$dados['cursos'] = $cursos->getCursosAvancado();


  	    $this->loadPainel('Painel/excluir_adm',$dados);

      }
    }
    

 }


 public function editar_alunos($id){
   if(empty($_SESSION['adm'])){
    header('Location:'.BASE_URL.'Login');
    exit();

   }else{

 	       $dados=array(
      'alunos'=>array(),
       'adm'=>array(),
       'get_alunos'=>array()
    );
    $alunos = new Alunos();
    $adm = new Adm();
  $cursos = new CursosPainel();
        
        
       $dados['alunos'] = $alunos->getAllAlunos();
       $dados['adm'] = $adm->getAlladm();

          if(isset($id) && !empty($id)){

            $dados['get_alunos'] = $alunos->getAlunos($id);

          }


          if(isset($_POST['nome']) && !empty($_POST['nome'])){
              $nome = addslashes($_POST['nome']);
              $email =  addslashes($_POST['email']); 
              $senha = addslashes($_POST['senha']);
              $id = addslashes($_POST['id']);
              $privilegio = addslashes($_POST['privilegio']);

              $alunos->edtAlunos($nome,$email,$senha,$id,$privilegio);

            }








	$dados['cursos'] = $cursos->getCursosAvancado();


  	$this->loadPainel('Painel/editar_alunos',$dados);
}

 }


 public function excluir_alunos($id){
   if(empty($_SESSION['adm'])){
    header('Location:'.BASE_URL.'Login');
    exit();

   }else{

      

   if(isset($id) && !empty($id)){

    echo "<script>alert('quer realmente excluir este usuario?');</script>";

          $dados=array(
      'alunos'=>array(),
       'adm'=>array()
    );
    $alunos = new Alunos();
    $adm = new Adm();
  $cursos = new CursosPainel();
     
       $dados['alunos'] = $alunos->getAllAlunos();
       $dados['adm'] = $adm->getAlladm();
       $dados['cursos'] = $cursos->getCursosAvancado();
      




        $this->loadPainel('Painel/excluir_alunos',$dados);

   }
 }

 


 }


 public function excluido_aluno($id){
   if(empty($_SESSION['adm'])){
    header('Location:'.BASE_URL.'Login');
    exit();

   }else{

  $alunos = new Alunos();
  $alunos->excluido_aluno($id);

 }
}




public function excluido_adm($id){
   if(empty($_SESSION['adm'])){
    header('Location:'.BASE_URL.'Login');
    exit();

   }else{

  $adm =  new Adm();
  $adm->excluido_adm($id);

 }
}








}