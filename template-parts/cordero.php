
<main class="main wrapper public mb-5" role="main">

<div class="container">

	<div class="row">
		<div class="col-xs-12 col-sm-10 offset-sm-1">
			<h2 class="title">Cordero</h2>
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
						
					<h1 class="subtitle"><?php the_title(); ?></h1>
					
					<?php the_content(); ?>
					<div class="row">
						<div class="col-12 col-md-6">
							<?php the_post_thumbnail( 'full', array('class' => 'img-responsive') ); ?>

						</div>
						<div class="col-12 col-md-6">
							<div class="mb-3 block-description">
								<h2>Descripción</h2><?php the_field( 'descripcion' ); ?>
							</div>
							<div class="mb-3 block-description">
								<h2>Presentación</h2><?php the_field( 'presentacion' ); ?>
							</div>
							<div class="mb-3 block-description">
								<h2>Conservación</h2><?php the_field( 'conservacion' ); ?>
							</div>

						</div>
					</div>

				<?php endwhile ?>
			<?php endif; ?>

		</div>
	</div>
</div>
</main>
