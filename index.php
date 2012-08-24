<?php get_header(); ?>



    <div id="slider" class="carousel slide span7">
        <!-- Carousel items -->
        <div class="carousel-inner">
        
        <?php
        
        $counter = 0;
        $slider = array('category_name' => 'slider');
        query_posts($slider);
        
        if( have_posts() ):
            while( have_posts()):
                the_post();
        ?>
                <div class="<?php if($counter == 0) echo 'active'; ?> item">
                   <a href="<?php the_permalink(); ?>" title="Acessar a matéria <?php the_title(); ?>">

                        <?php if(has_post_thumbnail()): ?>
                        <?php the_post_thumbnail(); ?>
                        <?php else: ?>
                        <img src="http://placehold.it/700x300" alt=""/>
                        <?php endif; ?>
                        <div class="carousel-caption">
                            <h4><?php the_title(); ?></h4>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                   </a>
                </div>
        
        <?php
                $counter++;
            endwhile;
        endif;
        ?>
        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#slider" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#slider" data-slide="next">&rsaquo;</a>
    </div>
    <!-- Final do Carrosel -->
    
    <!-- Inicio da Agenda -->
    <div id="agenda" class="span4 well pull-right">
        <h3>Agenda</h3>
        <ul class="agenda">
        <?php
        $agenda = array('category_name' => 'agenda', 'posts_per_page' => 3);
        query_posts($agenda);

        if( have_posts() ):
            while( have_posts()):
                the_post();
        ?>
            <li>
                <h4><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <p><?php the_excerpt(); ?></p>
                <p>
                    <small>
                <?php if(get_post_custom_values("data-evento")){
                        $data = get_post_custom_values("data-evento"); 
                        echo $data[0]; 
                      }
                ?>
                    </small>
                </p>
            </li>    
        <?php
            endwhile;
        endif;
        ?>
        </ul>
    </div>
    <!-- Final da Agenda -->
    <!-- Inicio de Artistas -->
    <div id="artistas" class="span11">
        <?php
        $artistas = array('category_name' => 'artistas', 'posts_per_page' => 3);
        query_posts($artistas);

        if( have_posts() ):
            while( have_posts()):
                the_post();
        ?>
            <div class="span3 well">
                <?php 
                if(has_post_thumbnail()){
                    the_post_thumbnail(array(), array('class' => 'span3 foto-artista', 'alt' => get_the_excerpt()));
                }
                ?>
                <h3><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <div class="caption">
                    <a href="<?php echo the_permalink(); ?>"><?php the_excerpt(); ?></a>
                </div>
                <a class="btn" href="<?php echo the_permalink(); ?>">veja mais</a>
            </div>  
        <?php
            endwhile;
        endif;
        ?>
        
    </div>
    <!-- Final de Artistas -->

<?php get_footer(); ?>