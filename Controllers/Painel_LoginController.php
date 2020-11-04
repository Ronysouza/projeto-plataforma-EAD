<?php

class Painel_LoginController extends Controller{



public function index(){

  
   //if(!isset($_SESSION['adm'])){
  // header('Location:'.BASE_URL.'Painel_Login');
  // exit();

   //}else{


	$dados=array();

   if(isset($_POST['email']) && !empty($_POST['email'])){

   	$email = $_POST['email'];
    $senha = $_POST['senha'];

    $cursos = new CursosPainel();
    if($cursos->logarAdm($email,$senha)){

     $AllCursos = new Cursos();
    	$cursos->logarAdm($email,$senha);


    	 $dados['AllCursos'] = $AllCursos->getCursos();
    	 echo "<script>alert('Logado com Sucesso')</script>";
    	$this->loadPainel('Painel/Painel_Inicio',$dados);

    }else{
    	echo "<script>alert('usuario e ou senha estão errados')</script>";
    		$this->loadView('Painel/Painel_Login',$dados);
    }
    

   }else{
   	$this->loadView('Painel/Painel_Login',$dados);

   }

	
//}


}
}







?>