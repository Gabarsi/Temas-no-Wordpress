<?php get_header(); ?> 

<h1>Categoria</h1>

<?php
$count = 0;
if( have_posts() ):
    while( have_posts()):
        the_post();
?>
<div class="span11 well" <?php if($count % 2 == 0) echo 'style="background: transparent;"'; ?>>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
</div>

<?php 
        $count++;
    endwhile;
endif;
?>
<hr />
<?php get_footer(); ?>