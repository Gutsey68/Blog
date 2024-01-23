<?php
$strPage = "index";
$strTitle = "Acceuil";
$strDesc = "Page affichant les 4 derniers articles";
	include("_partial/header.php");
	include_once("connect.php");
	$strQuery 	= "SELECT user_firstname as 'article_creator' , article_title , article_img ,article_content ,article_createdate
					 FROM articles
					 INNER JOIN users ON articles.article_creator = users.user_id
					 ORDER BY article_createdate DESC
					 LIMIT 4";
	$arrArticles	= $db->query($strQuery)->fetchAll();
	//define("MAX_CONTENT", 50);
	const MAX_CONTENT = 50;
?>
			<div class="row mb-2">
			<?php
				foreach($arrArticles as $arrDetailArticles){
					// Traitement de la date 
					$objDate = new DateTime( $arrDetailArticles['article_createdate']);
					$strCreateDAte = $objDate->format("d/m/Y");
					// Traitement du contenu 
					$strContent = $arrDetailArticles['article_content'];
					if(strlen($strContent) >= MAX_CONTENT ) {
						$strContent = substr($strContent, 0 , MAX_CONTENT)."...";
					}
			?>
				<article class="col-md-6">
					<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
						<div class="col p-4 d-flex flex-column position-static">
							<h3 class="mb-0"> <?php echo($arrDetailArticles['article_title']); ?></h3>
							<div class="mb-1 text-body-secondary"> <?php echo($strCreateDAte); ?> (<?php echo($arrDetailArticles['article_creator']); ?>)</div>
							<p class="mb-auto"> <?php echo($strContent); ?></p>
							<a href="#" class="icon-link gap-1 icon-link-hover stretched-link">Lire la suite</a>
						</div>
						<div class="col-auto d-none d-lg-block">
							<img class="bd-placeholder-img" width="200" height="250" alt="<?php echo($arrDetailArticles['article_title']); ?>" src="assets/images/<?php echo($arrDetailArticles['article_img']); ?>">
						</div>
					</div>
				</article>	
				<?php } ?>
			</div>
		<?php
			include("_partial/footer.php");
		?>
