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
	$arrArticles		= $objArticleModel->findAll();

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
	?>
		<article class="col-md-6">
			<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
				<div class="col p-4 d-flex flex-column position-static">
					<h3 class="mb-0"><?php echo($objArticle->getTitle()); ?></h3>
					<div class="mb-1 text-body-secondary">
						<?php echo($objArticle->getCreatedateFr()); ?> 
						(<?php echo($objArticle->getCreator()); ?>)
					</div>
					<p class="mb-auto">
						<?php echo($objArticle->getContentSummary(MAX_CONTENT)); ?>
					</p>
					<a href="#" class="icon-link gap-1 icon-link-hover stretched-link">Lire la suite</a>
				</div>
				<div class="col-auto d-none d-lg-block">
					<img class="bd-placeholder-img" width="200" height="250" 
						alt="<?php echo($objArticle->getTitle()); ?>" 
						src="assets/images/<?php echo($objArticle->getImg()); ?>">
				</div>
			</div>
		</article>
	<?php } ?>
	</div>
<?php
	include("_partial/footer.php");
?>