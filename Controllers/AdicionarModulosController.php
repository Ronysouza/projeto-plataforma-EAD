<?php

class AdicionarModulosController extends Controller{




 public function index(){
 	if(!isset( $_SESSION['adm'])){
   header('Location:'.BASE_URL.'Painel_Login');
    exit();

   }else{

 $dados = array();
 $cursos = new CursosPainel();

 if(isset($_POST['nome']) && $_POST['nome']){


	    $nome = addslashes($_POST['nome']);
		$modulo = addslashes($_POST['modulo']);
		$descricao = addslashes($_POST['descricao']);
		$imagem = addslashes($_FILES['imagem']);

		//if($cursos->addModulos($nome,$modulo,$descricao,$imagem)){
			$cursos->addModulos($nome,$modulo,$descricao,$imagem);
			echo "<script>alert('Modulo Adicionado com sucesso')</script>";

		//}else{
		//	echo "<script>alert('Para adicionar Novo Modulo,Todos os Campos devem estar preenchidos')</script>";

		//}

 }else{
     	echo "<script>alert('Para adicionar Novo Modulo,Todos os Campos devem estar preenchidos')</script>";
 }


  $dados['cursos'] = $cursos->getCursosAvancado();


 $this->loadPainel('Painel/AdicionarModulos',$dados);

}


 }






}