<?php


class HomeController extends Controller{

	public function index(){
		$dados = array();


  if(!isset($_SESSION['id'])){
  	header('Location:'.BASE_URL.'Login');
  	exit();

  }else{
  	 $status_cont = new ContaBlock();

   if($status_cont->getTipoStatus()){
   	
         header('Location:'.BASE_URL.'Modulo_Avancado');
   }else{
     
   	header('Location:'.BASE_URL.'contaBloqueada');
   	exit();
   }



  	
 }




		
		

	}









}