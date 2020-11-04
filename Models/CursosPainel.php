<?php

class CursosPainel extends Model{

     
     public function logarAdm($email,$senha){
     
      
  $sql = "SELECT * FROM administrador WHERE email = :email AND senha = :senha";
  $sql = $this->db->prepare($sql);
  $sql->bindValue(':email',$email);
  $sql->bindValue(':senha',$senha);
 $sql->execute();

  if($sql->rowCount() > 0){
      
      $_SESSION['adm'] = $sql->fetchAll();
    return true;

  }else{
    return false;

  } 
   

     }




public function getCursosIniciante(){
	$array = array();
	$sql = "SELECT * FROM aulas_modulo_basico";
	$sql = $this->db->query($sql);

	if($sql->rowCount() > 0){

		$array = $sql->fetchAll();

	} 
  
  return $array;
}


public function getQtaulas(){
 
	$sql = "SELECT count(*) FROM aulas_modulo_basico";
	$sql = $this->db->query($sql);

	if($sql->rowCount() > 0){

		$array = $sql->fetch();

	}
  
  return $array;
}




  
  public function editarAulas($id){
  	$array = array();
	$sql = "SELECT * FROM aulas_modulo_basico WHERE id ='$id'";
	$sql = $this->db->query($sql);

	if($sql->rowCount() > 0){

		$array = $sql->fetchAll();

	}
  
  return $array;

  }

  public function setEdit($nomemodulo,$descricao,$titulo,$url,$id){
  
  $sql = "UPDATE aulas_modulo_basico SET nome_modulo ='$nomemodulo', descricao = '$descricao',titulo = '$titulo', url = '$url' WHERE id = '$id' ";
   $this->db->query($sql);

  }




public function addAulas($nomemodulo,$descricao,$titulo,$url){


   $sql = "INSERT INTO aulas_modulo_basico SET id_curso = 1,nome_modulo = '$nomemodulo',descricao = '$descricao', titulo = '$titulo',url = '$url' ";
   $this->db->query($sql);


}


public function excluir($id){

  if(isset($id)){
  	 $sql = "DELETE FROM aulas_modulo_basico WHERE id = '$id'";
  $this->db->query($sql);

  return true;

  }else{
  	return false;
  }

}


public function excluirCursosAvancado($id){
 if(isset($id)){
     $sql = "DELETE FROM aulas WHERE id = '$id'";
  $this->db->query($sql);

  return true;

  }


}


public function getCursosAvancado(){

  $array = array();

  $sql = "SELECT * FROM cursos";
  $sql = $this->db->query($sql);

  if($sql->rowCount() > 0){

    $array = $sql->fetchAll();

  }

  return $array;

}


public function getAllCursosAvancado($id){

  $array = array();

  $sql = "SELECT id FROM cursos WHERE id = '$id'";
  $sql = $this->db->query($sql);

  if($sql->rowCount() > 0){

    $array = $sql->fetchAll();

  }

  return $array;

}





  public function getAllAulas($id){
     $array = array();
    $sql = "SELECT * FROM aulas WHERE id_curso = '$id'";
    $sql = $this->db->query($sql);
    if($sql->rowCount() > 0){

      $array = $sql->fetchAll();

    }

    return $array;



  }


public function getQtAulasModulo($id_curso){


    
   
   $sql = "SELECT count(*) FROM aulas WHERE id_curso = '$id_curso'";
  $sql = $this->db->query($sql);

  if($sql->rowCount() > 0){

    $array = $sql->fetch();

  }
  
  return $array;
}



 public function editarAulasAvancado($id_curso){


 $array = array();
   $sql = "SELECT * FROM aulas WHERE id = '$id_curso'";
  $sql = $this->db->query($sql);

  if($sql->rowCount() > 0){

    $array = $sql->fetchAll();
    
  }
  
  return $array;
}

public function edtAulaModulo($id,$nomemodulo,$descricao,$titulo,$url){



 $sql = "UPDATE aulas SET modulo ='$nomemodulo', descricao = '$descricao',titulo = '$titulo', url = '$url' WHERE id = '$id' ";
 
 $this->db->query($sql);

}








public function addAulasModuloAvancado($nomemodulo,$descricao,$titulo,$url,$id){
      
  if(isset($nomemodulo,$descricao,$titulo,$url,$id) && !empty($descricao)){
    $sql = "INSERT INTO aulas SET modulo = '$nomemodulo' ,descricao = '$descricao', titulo = '$titulo',url = '$url', id_curso = '$id' ";
   $this->db->query($sql);
  // return true;


      }//else{
       // return false;
     // }
}



public function addModulos($nome,$modulo,$descricao,$imagem){
    
    $img = $imagem;
    //print_r($imagem);
   
  $name = md5(time().rand(0,99)).$imagem['name'];

 if(isset($nome,$modulo,$descricao) && !empty($nome)){
       if(isset($imagem['tmp_name']) && !empty($imagem['tmp_name'])){
    
        move_uploaded_file($imagem['tmp_name'],'assets/images/'.$name);

         $sql = "INSERT INTO cursos SET nome = '$nome' ,modulo = '$modulo', descricao = 'descricao', imagem = '$name' ";
   $this->db->query($sql);
   return true;


       }

     
   

  

 }else{
  return false;
 }


}







public function getAllCursosEdt($id){

$array = array();
   $sql = "SELECT * FROM cursos WHERE id = '$id'";
  $sql = $this->db->query($sql);

  if($sql->rowCount() > 0){

    $array = $sql->fetchAll();
    
  }
  
  return $array;
}


public function updateCursos($nome,$modulo,$descricao,$id_curso){
        
        if(isset($nome) && !empty($nome)){          
   $sql = "UPDATE cursos SET nome = '$nome', modulo ='$modulo', descricao = '$descricao' WHERE id = '$id_curso' "; 
 $this->db->query($sql);
 return true;

        }else{
          return false;
        }





}






public function deletAllCursos($id){

   if(isset($id)){
     $sql = "DELETE FROM aulas WHERE id_curso = '$id'";
  $this->db->query($sql);

   
  }

  if(isset($id)){
     $sql = "DELETE FROM cursos WHERE id = '$id'";
  $this->db->query($sql);

   

  }
  


return true;

}















}