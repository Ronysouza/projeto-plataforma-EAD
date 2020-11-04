<?php

class LoginController extends Controller{






 public function index(){
       


 $dados = array(
     'error'=>array(),
     'error_codigo'=>array(),
     'error_max'=>array()
 );
      
     if(isset($_POST['email']) && !empty($_POST['email'])){

         $alunos = new Alunos();
     	$email =  addslashes($_POST['email']);
     	$senha = addslashes($_POST['senha']);
      $ip = addslashes($_SERVER['REMOTE_ADDR']);
      $tent = addslashes($_POST['tentativas_codigo_form']);
      if(!isset($_SESSION['email'])){
          $_SESSION['email'] = $email ; 

       }


      if(isset($tent) && !empty($tent)){
           if($tent == $_SESSION['tentativas_codigo']){
            $_SESSION['error_senhha'] = 5;
                   if($alunos->fazerLogin($email,$senha,$ip)){
         $id = $alunos->fazerLogin($email,$senha,$ip);
          
         header('Location:'.BASE_URL.'Modulo_Avancado');
       }else{
       
       echo '<script>alert("usuario e ou senha estao errados") </script>';
       }
           }else{         
            
                     if(isset($_SESSION['error_senhha']) && !empty($_SESSION['error_senhha'])){                          
                           $_SESSION['error_senhha']--;

                          //echo $_SESSION['error_senhha'] ;
                              
                              if($_SESSION['error_senhha'] == 1){
                                  echo "<script>alert('você só tem mais 1 tentativas')</script>";
                              }elseif($_SESSION['error_senhha'] == 2){
                                   echo "<script>alert('você só tem mais 2 tentativas')</script>";
                              }elseif($_SESSION['error_senhha']==3){

                               echo "<script>alert('você só tem mais 3 tentativas')</script>";

                              }elseif($_SESSION['error_senhha']==4){

                               echo "<script>alert('você só tem mais 4 tentativas')</script>";

                              }elseif($_SESSION['error_senhha']==5){

                               echo "<script>alert('você só tem mais 5 tentativas')</script>";

                              }elseif($_SESSION['error_senhha'] == 0 || $_SESSION['error_senhha'] < 0){
                                 $status_cont = new ContaBlock();
                                  
                                  if($status_cont->bloquear_conta()){
                                       // print_r($_SESSION['email']);
                                      
                                      header('Location:'.BASE_URL.'contaBloqueada');
                                  } 
                                     
                              }elseif($_SESSION['error_senhha'] > 5){
                                 $status_cont = new ContaBlock();
                                      if($status_cont->bloquear_conta()){
                                     header('Location:'.BASE_URL.'contaBloqueada');
                                  }
                                 
                                } 

                         
                           
                             



                            $dados['error_codigo'] = "codigo de verificação errado => código digitado [ ".$tent." ] !!";


                     }
                

                       

             
                


            
           }


      

      }else{

        $dados['error'] = "Voçê precisa confirmar a verificação não  sou ROBÔ !!";
      }    







      

     	


     }





 $this->loadView('Login',$dados);





 }






}



?>