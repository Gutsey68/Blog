<?php 
	class ErrorCtrl {
		public function show404(){
			$strPage	= "404";
			// Variable d'affichage du titre
			$strTitle 	= "Page non trouvée";
			// Variable d'affichage de la description
			$strDesc	= "Ton ordinateur va exploser dans 5 minutes";
						include("views/_partial/header.php");
						include("views/_partial/footer.php");
		}

		public function show403(){
			$strPage	= "403";
			// Variable d'affichage du titre
			$strTitle 	= "Page non autorisé";
			// Variable d'affichage de la description
			$strDesc	= "Pas si vite !";
						include("views/_partial/header.php");
						include("views/_partial/footer.php");
		}
	}