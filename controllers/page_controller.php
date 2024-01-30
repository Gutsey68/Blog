<?php
	class PageCtrl {
		
		public function contact() {
			$strPage	= "contact";
			$strTitle 	= "Contact";
			$strDesc	= "Page de contact";
			include("views/_partial/header.php");
			include("views/contact.php");
			include("views/_partial/footer.php");
		}
		
		public function mentions() {
			$strPage	= "mentions";
			$strTitle 	= "Mentions légales";
			$strDesc	= "Page de mentions légales";
			include("views/_partial/header.php");
			include("views/mentions.php");
			include("views/_partial/footer.php");
		}
		
		public function about() {
			$strPage	= "about";
			$strTitle 	= "A propos";
			$strDesc	= "Page de contenu";
			include("views/_partial/header.php");
			include("views/about.php");
			include("views/_partial/footer.php");
		}
	}