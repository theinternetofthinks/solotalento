<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		
		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?> data-style="<?php the_field('bodyclass'); ?>">
		<?php wp_body_open(); ?>
		<header class="header">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="top-header">
							<button class="open-menu d-block d-md-none" id="openMenu">
								<span></span>
							</button>
							<div class="logo-wrapper"><a href="/home"><?php echo get_custom_logo() ?></a></div>
							<div class="menu-wrapper">
								<nav class="menu">
										<?php
										wp_nav_menu(
											array(
												'theme_location' => 'primary',
												'menu_class'     => 'main-menu',
												'depth'          => 2,
											)
										);
										?>
									<div class="d-block d-md-none secondary-menu">
										<a href="/contacto">Contacto</a>
										<div class="languageswitch-container">
											<ul class="languageswitch">
												<?php pll_the_languages( array( 'name' => 1 )); ?>
											</ul>
										</div>
									</div>
								</nav>
								<div class="right-nav d-none d-md-flex">
								<?php if(ICL_LANGUAGE_CODE=='en'): ?>
									<a href="/contact">Contact</a>
								<?php elseif(ICL_LANGUAGE_CODE=='es'): ?>
									<a href="/contacto">Contacto</a>
								<?php endif; ?>
									
									<div class="languageswitch-container">
										<ul class="languageswitch">
											<?php pll_the_languages( array( 'name' => 1 )); ?>
										</ul>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</header>

		<main id="primary" class="site-main" role="main">
