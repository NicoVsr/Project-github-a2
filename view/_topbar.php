<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="navbar-brand">
				<a href="index.php" class="logo"><i class="fa fa-soundcloud"></i></a>
			</div>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="https://twitter.com/soundcloud?lang=fr" class="logo"><i class="fa fa-twitter"></i></a></li>
				<li><a href="https://www.facebook.com/SoundCloud/" class="logo"><i class="fa fa-facebook-official"></i></a></li>
			</ul>
			<form class="navbar-form navbar-left">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Rechercher une chanson">
				</div>
				<button type="submit" class="btn btn-default">Recherche</button>
			</form>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="http://www.soundcloud.com">Aller sur soundcloud </a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
					<ul class="dropdown-menu">

						<li><a href="logout.php">Déconnexion</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="edit_image.php">Profil</a></li>
						<li><a href="add_music.php"><i class="fa fa-plus"></i> Ajouter une zic' </a></li>
						<li role="separator" class="divider"></li>
						<li><a href="contact.php">Contact </a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>