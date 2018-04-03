<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title(' | ', true, 'right'); ?>  <?php bloginfo('name') ?></title>
	<?php wp_head(); ?>
</head>

<body>
 <!-- MENU PRINCIPAL -->
	<nav id="" class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#"><?php bloginfo('name') ?></a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse col-md-8 navbar-collapse" id="navbarResponsive">
				<ul class="menu">
					<?php wp_list_pages('title_li='); ?>
				</ul>
			</div>
			<div class="col-md-4 bg-orange">
				<p class="text-white">Tel 910 315 823 </p>
			</div>
		</div>
	</nav>
	<!-- /#Menu Principal -->
