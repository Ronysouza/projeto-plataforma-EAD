<?php

class Controller{

public function loadView($viewName,$viewData = array()){
	extract($viewData);

	require 'Views/'.$viewName.'.php';

}

public function loadPainel($viewName,$viewData = array()){
	require 'Views/TemplatePainel.php';
	

}


public function loadTemplate($viewName,$viewData = array()){
	require 'Views/Template.php';


}

public function loadViewInTemplate($viewName,$viewData = array()){

            extract($viewData);
			require 'Views/'.$viewName.'.php';

}


public function loadViewInTemplatePainel($viewName,$viewData = array()){

            extract($viewData);
			require 'Views/'.$viewName.'.php';

}












}




?>