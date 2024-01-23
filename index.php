<?php
$strPage = "index";
$strTitle = "Acceuil";
$strDesc = "Page affichant les 4 derniers articles";
	include("_partial/header.php");
?>
			<div class="row mb-2">
				<article class="col-md-6">
					<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
						<div class="col p-4 d-flex flex-column position-static">
							<h3 class="mb-0">LE devenir du Javascript </h3>
							<div class="mb-1 text-body-secondary">11/05/2017 (test)</div>
							<p class="mb-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit... </p>
							<a href="#" class="icon-link gap-1 icon-link-hover stretched-link">Lire la suite</a>
						</div>
						<div class="col-auto d-none d-lg-block">
							<img class="bd-placeholder-img" width="200" height="250" alt="js" src="assets/images/js.png">
						</div>
					</div>
				</article>
				
				<article class="col-md-6">
					<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
						<div class="col p-4 d-flex flex-column position-static">
							<h3 class="mb-0">Qu'est-ce que le HTML?</h3>
							<div class="mb-1 text-body-secondary">04/04/2017 (christel)</div>
							<p class="mb-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit... </p>
							<a href="#" class="icon-link gap-1 icon-link-hover stretched-link">Lire la suite</a>
						</div>
						<div class="col-auto d-none d-lg-block">
							<img class="bd-placeholder-img" width="200" height="250" alt="html" src="assets/images/html.png">
						</div>
					</div>
				</article>

				<article class="col-md-6">
					<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
						<div class="col p-4 d-flex flex-column position-static">
							<h3 class="mb-0">Utiliser le CSS correctement</h3>
							<div class="mb-1 text-body-secondary">08/05/2017 (christel)</div>
							<p class="mb-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit... </p>
							<a href="#" class="icon-link gap-1 icon-link-hover stretched-link">Lire la suite</a>
						</div>
						<div class="col-auto d-none d-lg-block">
							<img class="bd-placeholder-img" width="200" height="250" alt="css" src="assets/images/CSS.png">
						</div>
					</div>
				</article>

				<article class="col-md-6">
					<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
						<div class="col p-4 d-flex flex-column position-static">
							<h3 class="mb-0">Utiliser PhpMyAdmin</h3>
							<div class="mb-1 text-body-secondary">21/05/2017 (christel)</div>
							<p class="mb-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit... </p>
							<a href="#" class="icon-link gap-1 icon-link-hover stretched-link">Lire la suite</a>
						</div>
						<div class="col-auto d-none d-lg-block">
							<img class="bd-placeholder-img" width="200" height="250" alt="mysql" src="assets/images/mysql.png">
						</div>
					</div>
				</article>				
			</div>
		</main>

		<?php
			include("_partial/footer.php");
		
		?>
