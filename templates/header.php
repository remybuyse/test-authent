<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>shop'O'clock</title>
        <link rel="stylesheet" href="css/reset.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Raleway:200,400,600" rel="stylesheet" />
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <header id="header">
            <div class="container">
    			<nav class="navbar" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-collapse" aria-expanded="false">
						    <span class="sr-only">Toggle navigation</span>
						    <span class="icon-bar"></span>
						    <span class="icon-bar"></span>
						    <span class="icon-bar"></span>
						</button>
						<h1 class="navbar-brand titre"><a href="index.php">Pantouf'land</a></h1>
					</div>
					<div id="nav-collapse" class="collapse navbar-collapse">
						<ul class="nav navbar-nav  navbar-right">
							<!-- si l'utilisateur est connecté, afficher "bonjour xx" + lien logout -->
							<?php if(isLoggedIn()) : ?>
		                        <li><p class="navbar-text">Bonjour <?= getUserFirstname() ?></p></li>
		                        <li><a
                                    class="btn-primary"
                                    href="account.php"
                                    title="mon compte">
                                        <i class="fa fa-user-circle-o" aria-hidden="true"></i> mon compte
                                    </a></li>
		                        <li><a
                                    class="btn-primary"
                                    href="logout.php"
                                    title="me déconnecter">
                                    <i class="fa fa-sign-in" aria-hidden="true"></i> me déconnecter
                                </a></li>
							<!-- sinon afficher les liens d'inscription et de connexion -->
							<?php else : ?>
								<li><a class="btn-primary" href="signup.php" title="m'inscrire">
                                    <i class="fa fa-user-plus" aria-hidden="true"></i> m'inscrire
                                </a></li>
								<li><a class="btn-primary" href="login.php" title="me connecter">
                                    <i class="fa fa-sign-in" aria-hidden="true"></i> me connecter
                                </a></li>
							<?php endif; ?>
						</ul>
					</div>
    			</nav>
            </div>
        </header>
