<?php 
	/* Dispatche */
	$strAction = $_GET['action']??'home';
	$strCtrl = $_GET['ctrl']??'article';
	$strFileName = "controllers/".$strCtrl."_controller.php";
	$bool404 = false;
	
	if(file_exists($strFileName)){ // Test si le fichier existe
		include($strFileName);
		$strClassName = ucfirst($strCtrl)."Ctrl";
		// Test si le nom de classe existe
		if (class_exists($strClassName)) {
			$objCtrl = new $strClassName();
			// Test si la méthode existe dans l'objet controller
			if (method_exists($objCtrl ,$strAction )){
				$objCtrl ->$strAction();
			}else {
				$bool404 = true;
			}
		} else {
			$bool404 = true;
		}
	} else {
		$bool404 = true;
	}
	
	if ($bool404) {
		header('Location:index.php?action=show404&ctrl=error');
	}