<?php

class ContaBlock extends Model{

public function bloquear_conta(){
    
    if(isset($_SESSION['email']) && !empty($_SESSION['email'])){
        
        $email =  $_SESSION['email'];
        
       
  

  $sql = "UPDATE alunos SET status = 0 WHERE email = '$email' ";
  $this->db->query($sql);
    
    return true;
    }
  
  



}



public function getTipoStatus(){

 $email = $_SESSION['id'][0]['email'];


  

  $sql = "SELECT status FROM alunos WHERE email = '$email' ";
   $sql= $this->db->query($sql);
    
    $sts = $sql->fetch();

     

    if($sts['status'] == 1){

    	  
     return true;
    }else{
    	 
    	return false;
    }




}














}








?>