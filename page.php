<?php get_header(); 

if( have_posts() ):
    while( have_posts()):
        the_post();
?>
<div class="hero-unit">
    <h1><?php the_title(); ?></h1>    
</div>
<hr />
<?php the_content(); ?>
<?php comments_template('', TRUE); ?>
<?php 
    endwhile;
endif;
?>
<hr />
<?php get_footer(); ?>