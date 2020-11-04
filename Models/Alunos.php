<?php
 
 class Alunos extends Model{

private $id_aluno;
private $id_aluno_isncrito;

public function cadastoAlunos($nome,$senha,$email,$ip){
      $array = array();
      $ipe = array();





     $sql = "SELECT email FROM alunos WHERE email = :email";
    $sql = $this->db->prepare($sql);
        $sql->bindValue(':email',$email);
        $sql->execute();
    
    if($sql->rowCount() > 0){ 
          
       return false;    
       
    }else{  


         $sql = "SELECT * FROM alunos WHERE status = 0 ";
          $sql = $this->db->query($sql);
          
              if($sql->rowCount() > 0){                
                 $array = $sql->fetchAll();
                  if($array[0]['ip'] == $ip){               
                 header("Location:".BASE_URL."ip_bloqueado");
                 exit;
                              
              }      


              }

               


      $sql = "INSERT INTO alunos SET nome = :nome,senha = :senha,email = :email, privilegio = :basico,ip = :ip , hora = NOW(), status = :status";
        
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':nome',$nome);
       $sql->bindValue(':senha',$senha);
        $sql->bindValue(':email',$email);
       $sql->bindValue(':basico','basico');
        $sql->bindValue(':ip',$ip);
        $sql->bindValue(':status',1);
        

    $sql->execute();




      $sql = "SELECT id FROM alunos WHERE email = '$email'";
      $sql = $this->db->query($sql);
      if($sql->rowCount() > 0){

        $id_aluno_isncrito = $sql->fetch();


      }

  return true;

    }

         

  
}







public function fazerLogin($email,$senha/*,$ip*/){
   
   $array = array();
  

 


  

  $sql = "SELECT * FROM alunos WHERE email = '$email' AND senha = '$senha'";  
  $sql = $this->db->prepare($sql);
  $sql->bindValue(':email',$email);
  $sql->bindValue(':senha',$senha);
  $sql->execute();  
  if($sql->rowCount() > 0){
 
      $sql = "SELECT * FROM alunos WHERE email = '$email' AND senha = '$senha'";   
     $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){ 

            $array = $sql->fetchAll(); 

            //print_r($array[0]['status']);exit();
                 
                 if($array[0]['status'] == 0){                    
                    
                   header("Location:".BASE_URL."contaBloqueada");
                    exit();
                 }else{

                         // if($array[0]['ip'] == $ip){
              
              $sql = "SELECT * FROM alunos WHERE email = '$email' AND senha = '$senha'";   
             $sql = $this->db->query($sql);
             $_SESSION['id']= $sql->fetchAll(); 
              
             


              
       return true;
    // }else{
        
     //  echo "<script>alert('sua maquina nao tem permissao para acessar esta //area')</script>";
       //header('Location:'.BASE_URL.'Login');
      // echo "<BR><BR><hr><center><h1 style='color:red' > FAVOR VOLTAR A TELA DE LOGIN<br>VOCE NAO TEM PERMISSAO PARA ACESSAR ESTA AREA </h1><a href=''>login</a></center><hr>";
     //  exit();
       
     //} 
                  



                 }



             
              
        }else{
          header('Location:'.BASE_URL.'login.php');
        }     
 

        
 


  	
  } 

   return $this->id_aluno; 

}



public function getIsInscritos(){

   $id = $_SESSION['id'][0]['id']; 
   $array =array();


  $sql = "SELECT privilegio FROM alunos WHERE id = :id";
 $sql = $this->db->prepare($sql);
 $sql->bindValue(':id',$id);
 $sql->execute();  

  //$sql = $this->db->query($sql);
  if($sql->rowCount() > 0){   
    $array = $sql->fetch();
       
  }

  return $array;

}
 





public function getAlunosCursos(){
        $id = $_SESSION['id'][0]['id'];
        
       $array = array();

	$sql = "SELECT * FROM alunos WHERE id = '$id'";
	$sql = $this->db->query($sql);
	if($sql->rowCount() > 0){

    $array = $sql->fetchAll();

  

	}
	  return $array;
}



public function isInscritos(){


  $sql = "SELECT privilegio FROM alunos";
  $sql = $this->db->query($sql);
  if($sql->rowCount() > 0){



    $privilegio = $sql->fetch();        

      if($privilegio == 'avancado'){
         return true;
      }else{
        return false;
      }
      
  
 
  } 



}


public function getAlunos($id){

     $array = array();

  $sql = "SELECT * FROM  alunos WHERE id = '$id' ";
  $sql = $this->db->query($sql);
  if($sql->rowCount() > 0){

    $array = $sql->fetchAll();
  
  

  }
    return $array;
}







public function getAllAlunos(){
    
        
       $array = array();

  $sql = "SELECT * FROM alunos ORDER BY id DESC ";
  $sql = $this->db->query($sql);
  if($sql->rowCount() > 0){

    $array = $sql->fetchAll();
  
  

  }
    return $array;
}



public function edtAlunos($nome,$email,$senha,$id,$privilegio){

 $sql = "UPDATE alunos SET nome  ='$nome', email = '$email',senha = '$senha',privilegio ='$privilegio' WHERE id = '$id' ";
   
   $this->db->query($sql);




}

public function excluido_aluno($id){

if(isset($id)){
      $sql = "DELETE FROM alunos WHERE id = '$id'";
   $this->db->query($sql);

    header('Location:'.BASE_URL.'controle_alunos');
    exit();

  }

}






 }




?>