<?php
$strPage = "index";
$strTitle = "Acceuil";
$strDesc = "Page affichant les 4 derniers articles";
	include("_partial/header.php");
	include_once("connect.php");
	$strQuery 	= "SELECT user_firstname , article_title , article_img , LEFT (article_content, 80) as 'content' , DATE(article_createdate) as 'article_createdate'
					 FROM articles
					 INNER JOIN users ON articles.article_creator = users.user_id
					 ORDER BY article_createdate DESC
					 LIMIT 4";
	$arrArticles	= $db->query($strQuery)->fetchAll();
	?>
	

			<div class="row mb-2">
			<?php
		foreach($arrArticles as $arrDetailArticles){
		?>
				<article class="col-md-6">
					<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
						<div class="col p-4 d-flex flex-column position-static">
							<h3 class="mb-0"> <?php echo($arrDetailArticles['article_title']); ?></h3>
							<div class="mb-1 text-body-secondary"> <?php echo($arrDetailArticles['article_createdate']); ?> (<?php echo($arrDetailArticles['user_firstname']); ?>)</div>
							<p class="mb-auto"> <?php echo($arrDetailArticles['content']."..."); ?></p>
							<a href="#" class="icon-link gap-1 icon-link-hover stretched-link">Lire la suite</a>
						</div>
						<div class="col-auto d-none d-lg-block">
							<img class="bd-placeholder-img" width="200" height="250" alt="js" src="assets/images/<?php echo($arrDetailArticles['article_img']); ?>">
						</div>
					</div>
				</article>	
				<?php } ?>
			</div>
	
		<?php
			include("_partial/footer.php");
		
		?>
