<ul>
<?php

if( have_posts() ):
    while( have_posts()):
        the_post();
        echo '<li>' . the_title() . '</li>';            
    endwhile;
endif;
?>
</ul>