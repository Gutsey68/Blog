<?php 
	class UserCtrl {
		
		public function create_account() {
			$strPage	= "create_account";
			$strTitle 	= "Créer un compte";
			$strDesc	= "Page de création de compte";
			include("views/_partial/header.php");
			include("views/create_account.php");
			include("views/_partial/footer.php");
		}
		public function login() {
			$strPage	= "login";
			$strTitle 	= "Log in";
			$strDesc	= "Page de connexion";
			include("views/_partial/header.php");
			include("views/login.php");
			include("views/_partial/footer.php");
		}
		public function logout() {
			$strPage	= "logout";
			$strTitle 	= "Log out";
			$strDesc	= "Page de log out";
			include("views/_partial/header.php");
			include("views/logout.php");
			include("views/_partial/footer.php");
		}
		public function profile() {
			$strPage	= "profile";
			$strTitle 	= "Profile";
			$strDesc	= "Page du profil";
			include("views/_partial/header.php");
			include("views/profile.php");
			include("views/_partial/footer.php");
		}
	}