<?php
class Cursos extends Model{


 

 public function getCursos(){
 	$array = array();
 	$sql = "SELECT * FROM cursos";
 	$sql = $this->db->query($sql);
 	if($sql->rowCount() > 0){
 		$array = $sql->fetchAll();
 		

 	}
 	return $array;
 }


 public function getCursosVideos($id){

 	$array = array();

  $sql = "SELECT * FROM aulas WHERE id_curso = '$id' ORDER BY id ASC";
  $sql = $this->db->query($sql);
  if($sql->rowCount() > 0){

  	$array = $sql->fetchAll();

  }

  return $array;




 }




	 public function Videos($id){

$array = array();

  $sql = "SELECT * FROM aulas WHERE id = '$id'";
  $sql = $this->db->query($sql);
  if($sql->rowCount() > 0){

  	$array = $sql->fetchAll();
      
     // print_r($array);exit();
  }

  return $array;
  




	 }





public function getModuloIniciante(){

  $array = array();
  $sql = "SELECT * FROM aulas_modulo_basico";
  $sql = $this->db->query($sql);

  if($sql->rowCount() > 0){

    $array = $sql->fetchAll();

  }

  return $array;
}



public function getVideoAulas($id){

 $array = array();
  $sql = "SELECT * FROM aulas_modulo_basico WHERE id = '$id'";
  $sql = $this->db->query($sql);

  if($sql->rowCount() > 0){

    $array = $sql->fetchAll();

  }

  return $array;
}













}