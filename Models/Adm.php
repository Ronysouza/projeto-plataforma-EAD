<?php
class Adm extends model{


  public function getAlladm(){
    
        
       $array = array();

  $sql = "SELECT * FROM  administrador ";  
  $sql = $this->db->query($sql);
  if($sql->rowCount() > 0){

    $array = $sql->fetchAll();
  
  

  }
    return $array;
}



public function getAdm($id){

     $array = array();

  $sql = "SELECT * FROM  administrador WHERE id = '$id' ";
  $sql = $this->db->query($sql);
  if($sql->rowCount() > 0){

    $array = $sql->fetchAll();
  
  

  }
    return $array;
}

public function edtAdm($nome,$email,$senha,$id){

 $sql = "UPDATE administrador SET nome  ='$nome', email = '$email',senha = '$senha' WHERE id = '$id' ";

   $this->db->query($sql);

 }




  public function excluido_adm($id){

if(isset($id)){
    //  $sql = "DELETE FROM administrador WHERE id = '$id'";
  // $this->db->query($sql);

    header('Location:'.BASE_URL.'controle_alunos');
    exit();

  }

}









}