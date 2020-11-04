<?php

class CadastroController extends Controller{




  public function index(){
  	$dados=array(
      'error'=>array(),
      'error_codigo'=>array()
    );

 

      if(isset($_POST['nome']) && !empty($_POST['nome'])){
          global $nome;
            $alunos = new Alunos();

      	 $nome = addslashes($_POST['nome']);
      	 $senha = addslashes($_POST['senha']);
      	 $email = addslashes($_POST['email']);
         $ip = addslashes($_SERVER['REMOTE_ADDR']);
         $tentativas = addslashes($_POST['tentativas']);
         $tent = $_SESSION['tentativas'];

          
          if(isset($tentativas) && !empty($tentativas)){
            if($tentativas == $_SESSION['tentativas']){

              
                 if($alunos->cadastoAlunos($nome,$senha,$email,$ip)){
               $alunos->cadastoAlunos($nome,$senha,$email,$ip);
               
               header('Location:'.BASE_URL.'Login');
            }else{
              echo "<script> alert('ja existe um usuario cadastrado com Email ".$email." por favor Entre com um Email que nao Esteja Cadastrado') </script>";
            }

             }else{

              
              $dados['error_codigo'] = "codigo de verificação errado => código digitado [ ".$tentativas." ] !!";
             }
           

          }else{
            $dados['error'] = "Voçê precisa confirmar a verificação não  sou ROBÔ !!";
             
          }

             
             



            
          

             



      }






  	$this->loadTemplate('Cadastro',$dados);
  }











}