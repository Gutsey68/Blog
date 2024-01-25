<?php
	// Variable fonctionnelle qui définit la page en cours
	$strPage	= "index";
	// Variable d'affichage du titre
	$strTitle 	= "Accueil";
	// Variable d'affichage de la description
	$strDesc	= "Page affichant les 4 derniers articles";
	include("_partial/header.php");

	/* Utilisation de la classe model */
	include_once("article_model.php");
	$objArticleModel	= new ArticleModel;
	$arrArticles		= $objArticleModel->findAll(4);

	// Parcourir les articles pour créer des objets
	$arrArticlesToDisplay	= array();
	include_once("article_entity.php"); // inclure la classe
	foreach($arrArticles as $arrDetailArticle){	
		$objArticle = new Article();		// instancie un objet Article
		$objArticle->hydrate($arrDetailArticle);
		$arrArticlesToDisplay[] = $objArticle;
	}
	
	
	const MAX_CONTENT = 50;
	
?>
	<div class="row mb-2">
	<?php 
		foreach($arrArticlesToDisplay as $objArticle){ 
	
		include("article.php");
	 } ?>
	</div>
<?php
	include("_partial/footer.php");
?>