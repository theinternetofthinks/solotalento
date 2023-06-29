<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<?php wp_head(); ?>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" />
		<style>
			header .nav-secondary {
				display: none;
			}
		</style>
	</head>

	<body <?php body_class(); ?>> 
		<?php wp_body_open(); ?>

		<header class="header">
			<div class="primary-nav">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-4">
							<div class="logo">
								<?php echo get_custom_logo() ?>
							</div> 
						</div>
						<div class="col-12 col-md-8">
							<div class="py-4 d-block d-md-none">
								<button class="toggle-menu"><span></span></button>
							</div>
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu',
										'depth'          => 2,
									)
								);
							?>
							<div style="display:none;">
								<?php
									wp_nav_menu(
										array(
											'theme_location' => 'secondary',
											'menu_class'     => 'secondary-menu',
											'depth'          => 2,
										)
									);
								?>
							</div>

						</div>
					</div>
				</div>
			</div>
	
		</header>

		<main id="primary" class="site-main" role="main">
