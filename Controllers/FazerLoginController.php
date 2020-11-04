<?php

class FazerLoginController extends Controller{




 public function index(){



if(isset($_POST['email']) && !empty($_POST['email'])){

   	$email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    $cursos = new CursosPainel();
    if($cursos->logarAdm($email,$senha)){

     $AllCursos = new Cursos();
    	$cursos->logarAdm($email,$senha);


    	 $dados['AllCursos'] = $AllCursos->getCursos();
    	$this->loadPainel('Painel/Painel_Inicio',$dados);

    }else{
    	echo "<script>alert('usuario e ou senha estão errados')</script>";
    }
    

   }



	
}






}