<?php
/**
 * Template Name: Page Cordero
 *
 * @package WordPress
 * @subpackage Tressis
 * @since Tressis 1.0
 */

get_header(); 


?>

<main class="events main wrapper public" role="main">

    <div class="container">

        <div class="row">
			<div class="col-xs-12 col-sm-10 offset-sm-1">

                <div class="row">

                    <div class="col-12 col-sm-6">
                       <h1 class="title mb-7"><?php the_title(); ?>	</h1>	
                       <div class="block-pieces">
                           <?php query_posts('post_type=cordero&posts_per_page=40');?>
                           <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                           <div class="content" data-value="<?php the_title(); ?>">
                                <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail( 'full', array('class' => 'img-responsive') ); ?>
                                <div class="wrapper-title"><?php the_title(); ?></div>
                                </a>
                           </div>
                           <?php endwhile; else: endif; ?> 
                           <?php wp_reset_query();?>
                       </div>
                    </div>

                    <div class="col-12 col-sm-6">
                        <img class="img-body" src="<?php bloginfo('template_url'); ?>/assets/images/cordero/cuerpo.png" id="imageChange"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>	

<?php
get_footer() ;?>



<style>
    .block-pieces {
        margin-bottom: 100px;
        margin-top: 50px;
    }
    .block-pieces .wrapper + .wrapper {
        display: none;
    }
    .block-pieces .content {
        width: 33%;
        display: inline-block;
        border-bottom: 2px solid #86BC25;
        border-right: 2px solid #86BC25;
        padding-bottom: 2px;
    }
    .block-pieces .wrapper .content:nth-child(7),
    .block-pieces .wrapper .content:nth-child(8),
    .block-pieces .wrapper .content:nth-child(9) {
        border-bottom: 0px;
    }   
    .block-pieces .wrapper .content:nth-child(9),
    .block-pieces .wrapper .content:nth-child(6),
    .block-pieces .wrapper .content:nth-child(3) {
        border-right: 0px;
    }
    .block-pieces img{
        width: 98%;
        display: block;
        height: 100px;
        padding-bottom: 2px;
        margin: auto;
        cursor: pointer;
    }
    .content {
        position: relative;
    }
    .content img{
        border: 1px solid #fff;
    }
    .content:hover img{
        border: 1px solid #86bc25;
    }
    .content:hover img + .wrapper-title {
        display: block;
    }
    .wrapper-title {
        display: none;
        background:#86bc25;
        color:#fff;
        text-align: center;
        font-family: 'Helvetica Neue LT Std';
        font-size: 1rem;
        position: absolute;
        width: calc(100% - 4px);
        left: 2px;
        top: -30px;
        height: 30px;
        line-height: 30px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        padding: 0 5px;      
    }
    .img-body {
        height: 100%;
        width: 100%;
        object-fit: contain;
    }
</style>


<script>
    var myEls  = $('.block-pieces .content');
    var numEls = myEls.length;

    for ( i=0; i<numEls; i=i+9 ) {
    myEls.eq(i)
        .add( myEls.eq(i+1) )
        .add( myEls.eq(i+2) )
        .add( myEls.eq(i+3) )
        .add( myEls.eq(i+4) )
        .add( myEls.eq(i+5) )
        .add( myEls.eq(i+6) )
        .add( myEls.eq(i+7) )
        .add( myEls.eq(i+8) )
        .wrapAll('<div class="wrapper"/>');
    }

    $('.content a'). mouseenter(function(){
        var part = $(this).parent('.content').attr('data-value').toLowerCase()
        var location = window.location.hostname
        $('#imageChange').attr('src', location + '/assets/images/cordero/' + part +'.png')
        console.log(location)
    })

</script>