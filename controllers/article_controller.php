<?php
	class ArticleCtrl {
		
		const MAX_CONTENT = 50;
		
		
		public function home() {
			// Variable fonctionnelle qui définit la page en cours
			$strPage	= "index";
			// Variable d'affichage du titre
			$strTitle 	= "Accueil";
			// Variable d'affichage de la description
			$strDesc	= "Page affichant les 4 derniers articles";
			include("views/_partial/header.php");

			/* Utilisation de la classe model */
			include_once("models/article_model.php");
			$objArticleModel	= new ArticleModel;
			$arrArticles		= $objArticleModel->findAll(4);

			// Parcourir les articles pour créer des objets
			$arrArticlesToDisplay	= array();
			include_once("entities/article_entity.php"); // inclure la classe
			foreach($arrArticles as $arrDetailArticle){	
				$objArticle = new Article();		// instancie un objet Article
				$objArticle->hydrate($arrDetailArticle);
				$arrArticlesToDisplay[] = $objArticle;
			}
			
			
			include("views/home.php");
			include("views/_partial/footer.php");
		}
		
		public function blog () {
			$strPage	= "blog";
			$strTitle 	= "Blog";
			$strDesc	= "Page affichant tous les articles, avec une zone de recherche sur les articles";
			include("views/_partial/header.php");
			
			
			// Récupère l'information dans $_POST => car form est en methode post
			$strKeywords 	= $_POST['keywords']??"";
			//$strKeywords 	= trim($strKeywords);
			$intPeriod		= $_POST['period']??0;
			$strDate		= $_POST['date']??"";
			$strStartDate	= $_POST['startdate']??"";
			$strEndDate		= $_POST['enddate']??"";
			
			$arrSearch 		= array('keywords' 	=> $strKeywords,
									'period' 	=> $intPeriod,
									'date' 		=> $strDate,
									'startdate' => $strStartDate,
									'enddate' 	=> $strEndDate,
									);
			
			/* Utilisation de la classe model */
			
			include_once("models/article_model.php");
			$objArticleModel	= new ArticleModel;
			$arrArticles		= $objArticleModel->findAll(0, $arrSearch );

			// Parcourir les articles pour créer des objets
			$arrArticlesToDisplay	= array();
			include_once("entities/article_entity.php"); // inclure la classe
			
			foreach($arrArticles as $arrDetailArticle){	
				$objArticle = new Article();		// instancie un objet Article
				$objArticle->hydrate($arrDetailArticle);
				$arrArticlesToDisplay[] = $objArticle;
			}
			include("views/blog.php");
			include("views/_partial/footer.php");
		}
		
	}