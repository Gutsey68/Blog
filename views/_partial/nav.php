			<div class="nav-scroller py-1 mb-3 border-bottom">
				<nav class="nav nav-underline justify-content-between">
					<a class="nav-item nav-link link-body-emphasis <?php if($strPage == "index"){ echo("active"); } ?>" href="index.php">Accueil</a>
					<a class="nav-item nav-link link-body-emphasis <?php if($strPage == "about"){ echo("active"); } ?>" href="index.php?action=about&ctrl=page">A propos</a>
					<a class="nav-item nav-link link-body-emphasis <?php if($strPage == "blog"){ echo("active"); } ?>" href="index.php?action=blog&ctrl=article">Blog</a>
					<a class="nav-item nav-link link-body-emphasis <?php if($strPage == "contact"){ echo("active"); } ?>" href="index.php?action=contact&ctrl=page">Contact</a>
				</nav>
			</div>