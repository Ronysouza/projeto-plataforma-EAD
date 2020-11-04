 <?php


class Painel_InicioController extends Controller{




 public function index(){

   if(!isset($_SESSION['adm']) || empty($_SESSION['adm'])){
    header('Location:'.BASE_URL.'Painel_Login');
    exit();

   }else{

   


 	 $dados = array(
        'itens'=>array(),
         'qt'=>array(),
         'AllCursos'=>array()
      );

         $cursos = new CursosPainel();
         $AllCursos = new Cursos();

         $dados['itens'] = $cursos->getCursosIniciante();
         $dados['dt'] = $cursos->getQtaulas();
         $dados['cursos'] = $cursos->getCursosAvancado();
         $dados['AllCursos'] = $AllCursos->getCursos();


 	$this->loadPainel('Painel/Painel_Inicio',$dados);


  }
 }

 public function editar($id){
  


   if(!isset( $_SESSION['adm'])){
    header('Location: Painel_Login');
    exit();

   }else{
 

$dados = array();

  $cursos = new CursosPainel();

     if(isset($id) && !empty($id)){
        $dados['edt_cursos']= $cursos->getAllCursosEdt($id);
     }

     if(isset($_POST['nome']) && !empty($_POST['nome'])){
         $nome = addslashes($_POST['nome']);
         $modulo = addslashes($_POST['modulo']);
         $descricao = addslashes($_POST['descricao']);
         $imagem  = addslashes($_POST['imagem']);
         $id_curso = addslashes($_POST['id_curso']);

          if($cursos->updateCursos($nome,$modulo,$descricao,$id_curso)){
            $cursos->updateCursos($nome,$modulo,$descricao,$id_curso);
            echo "<script>alert('Editado com sucesso')</script>";

          }else{
            echo "<script>alert('preencha os campos corretamente')</script>";
          }
    
          
  


     }else{
      echo "<script>alert('preencha todos os campos')</script>";
     }




 $dados['cursos'] = $cursos->getCursosAvancado();
$this->loadPainel('Painel/Painel_Inicio_Editar',$dados);

 }
}


public function excluir($id){
 
   if(!isset( $_SESSION['adm'])){
    header('Location: Painel_Login');
    exit();

   }else{


     $dados = array();

$cursos = new CursosPainel();
$AllCursos = new Cursos();

      
  if(isset($id) && !empty($id)){
   echo "<script>alert('ATENCAO!! quer realmente Deletar Permanentemente este Modulo?')</script>";
    $dados['cursos'] = $cursos->getCursosAvancado();
    $dados['AllCursos'] = $AllCursos->getCursos();
   $this->loadPainel('Painel/Painel_Inicio_Excluir',$dados);

  }


}
}




  public function excluir_cursos($id){

    
   if(!isset($_SESSION['adm'])){
     header('Location:'.BASE_URL.'Painel_Login');
    exit();

   }else{
   
     $dados = array();

$cursos = new CursosPainel();
$AllCursos = new Cursos();

      
      $cursos->deletAllCursos($id);



 $dados['cursos'] = $cursos->getCursosAvancado();
 $dados['AllCursos'] = $AllCursos->getCursos();
$this->loadPainel('Painel/Painel_Inicio_Excluir',$dados);
}


  }







}








?>