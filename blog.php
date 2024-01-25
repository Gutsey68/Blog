<?php
	$strPage	= "blog";
	$strTitle 	= "Blog";
	$strDesc	= "Page affichant tous les articles, avec une zone de recherche sur les articles";
	include("_partial/header.php");
	
	// Récupère l'information dans $_POST => car form est en methode post
	$strKeywords 	= $_POST['keywords']??"";
	$strKeywords 	= trim($strKeywords);
	var_dump($_POST);
	
	$arrSearch 		= array('keywords' => $strKeywords,
							'period' => ''
							);
	
	/* Utilisation de la classe model */
	include_once("article_model.php");
	$objArticleModel	= new ArticleModel;
	$arrArticles		= $objArticleModel->findAll(0, $arrSearch );

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
				<form name="formSearch" method="post" action="#">
					<fieldset>
						<legend>Rechercher des articles</legend>
						<p><label for="keywords">Mots clés</label>
							<input id="keywords" type="text" name="keywords" value="<?php echo($strKeywords); ?>" />
						</p>
						<p>	<input type="radio" name="period" checked value="0" onclick="changePeriod()" /> Par date exacte
							<input type="radio" name="period" value="1" onclick="changePeriod()" /> Par période
						</p>
						<p id="uniquedate">
							<label for="date">Date</label>
							<input id="date" type="date" name="date" />
						</p>
						<p id="period">
							<label for="startdate">Date de début</label>
							<input id="startdate" type="date" name="startdate" />
							<label for="enddate">Date de fin</label>
							<input id="enddate" type="date" name="enddate" />
						</p>
						<p>
							<label for="author">Auteur</label>
							<select id="author">
								<option>christel</option>
								<option>test</option>
							</select>
						</p>
						<p><input type="submit" value="Rechercher" /> <input type="reset" value="Réinitialiser" /></p>
					</fieldset>
				</form>
			
	<?php 
		foreach($arrArticlesToDisplay as $objArticle){ 
			include("article.php");
		} 
	?>		
			</div>
<?php
	include("_partial/footer.php");
?>