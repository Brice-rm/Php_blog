
<header>
	<nav class=" blue-grey lighten-1 backimg">
		<div class="container">
			<div class="nav-wrapper" >

				<a href="<?=ROOT_URL?>blog_index.html" class="brand-logo padding-top:50px"><img src="../static/img/logo.png" width="120px" alt=""></a>

				<a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>

				<ul class="right hide-on-med-and-down">

					<li class="<?php echo ($_GET['a']=="index")?"active" : ""; ?>"><a href="<?=ROOT_URL?>blog_index.html">Accueil</a></li>
					<li class="<?php echo ($_GET['a']=="chapters")?"active" : ""; ?>"><a href="<?=ROOT_URL?>blog_chapters.html">Posts</a></li>

					<?php if (empty($_SESSION['is_admin']) && empty($_SESSION['is_user'])): ?>
					<li><a href="<?=ROOT_URL?>blog_login.html" class="btn yellow accent-2  black-text waves-effect waves-light">Connexion<i class="material-icons right">lock_open</i></a></li>
					<?php endif ?>

					<?php if (!empty($_SESSION['is_admin'])): ?>
					<li class="<?php echo ($_GET['a']=="dashboard")?"active" : ""; ?>"><a href="<?=ROOT_URL?>admin_dashboard.html"><i class="material-icons">dashboard</i></a></li>
					<?php endif ?>

					<?php if (!empty($_SESSION['is_admin'])): ?>
					<li class="<?php echo ($_GET['a']=="edit")?"active" : ""; ?>"><a href="<?=ROOT_URL?>admin_edit.html"><i class="material-icons">edit</i></a></li>
					<?php endif ?>

					<?php if (!empty($_SESSION['is_admin']) || !empty($_SESSION['is_user'])): ?>
					<li><a href="<?=ROOT_URL?>?p=blog&amp;a=logout" class="btn yellow accent-2 black-text waves-effect waves-light">Déconnexion<i class="material-icons right">lock_outline</i></a></li>
					<?php endif ?>
				</ul>
						<h1 class="hello">Bienvenue a toi !</h1>
				<ul class="side-nav" id="mobile-menu">

					<li class="<?php echo ($_GET['a']=="index")?"active" : ""; ?>"><a href="<?=ROOT_URL?>blog_index.html">Accueil</a></li>
					<li class="<?php echo ($_GET['a']=="chapters")?"active" : ""; ?>"><a href="<?=ROOT_URL?>blog_chapters.html">Articles</a></li>

					<?php if (empty($_SESSION['is_admin']) && empty($_SESSION['is_user'])): ?>
					<li class="<?php echo ($_GET['a']=="login")?"active" : ""; ?>"><a href="<?=ROOT_URL?>blog_login.html">Connexion</a></li>
					<?php endif ?>

					<?php if (!empty($_SESSION['is_admin'])): ?>
					<li class="<?php echo ($_GET['a']=="dashboard")?"active" : ""; ?>"><a href="<?=ROOT_URL?>admin_login.html">Dashboard</a></li>
					<?php endif ?>

					<?php if (!empty($_SESSION['is_admin'])): ?>
					<li class="<?php echo ($_GET['a']=="edit")?"active" : ""; ?>"><a href="<?=ROOT_URL?>admin_edit.html">Edition</a></li>
					<?php endif ?>

					<?php if (!empty($_SESSION['is_admin']) || !empty($_SESSION['is_user'])): ?>
					<li><a href="<?=ROOT_URL?>?p=blog&amp;a=logout">Déconnexion</a></li>
					<?php endif ?>
				</ul>

			</div>
		</div>
	</nav>
</header>
