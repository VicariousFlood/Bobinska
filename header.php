<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>
">
	<meta name="author" content="">

	<title><?php echo get_bloginfo( 'name' ); ?></title>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&amp;subset=latin-ext" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<?php wp_head();?>
</head>

<body>

<header>
	<div class="container">
		<div class="top">
			<div class="address">
				<p>
					Marszałkowska 83,<br>
					Nr. lok 4, Warszawa
				</p>
			</div>
			<div class="contact">
				
				<a href="tel:731020709"><p>Recepcja  &nbsp<i class="fa fa-phone" aria-hidden="true"></i> </p> 731 02 07 09</a>
				<a href="<?php echo get_page_link(4); ?>" class="button">Kontakt</a>
			</div>
		</div>
		<div class="logo">
			<a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="logo" /></a>
			<h2>Renata Bobińska - Lekarz Specjalista Psychiatra</h2>
		</div>
	</div>
</header>