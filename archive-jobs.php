<?php get_header(); ?>

<main class="events main wrapper public" role="main">

    <div class="container">

        <div class="row">
			<div class="col-12">
                <section>
                    <div class="block-intro  mb-7">
                        <h1 class="title mb-5 text-center"><?php the_title(); ?></h1>	
                        <h2 class="subtitle text-center">
                            Bij The White Room by Jacob Jan Boerma zijn wij regelmatig op zoek naar enthousiaste collega's. Hier vind je een actueel overzicht van onze vacatures: 
                        </h2>
                    </div>
                </section>
            </div>
            <div class="col-8 offset-2">
                <section>
                    <?php query_posts('post_type=jobs&posts_per_page=40');?>
                       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <a class="no-decoration" href="<?php the_permalink();?>">
                            <div class="vacature">
                                <div class="d-flex">
                                    <span class="date"><?php the_field('publish_date');?></span>
                                    <span class="vacature-offer"><?php the_title(); ?></span>
                                </div>

                                <span class="type-offer"><?php the_field('type_of_offer');?></span>
                            </div>
                        </a>
                       <?php endwhile; else: endif; ?> 
                    <?php wp_reset_query();?>
                </section>
            </div>
        </div>
    </div>
</main>	

<?php get_footer();


