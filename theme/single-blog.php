<?php get_header() ; ?>

<?php

if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
        <div class="blog-single">
            <div class="title"><?php the_title() ;?></h1></div>
            <div class="excerpt"><?php the_date () ; ?></div>
            <div class="picture"><?php the_post_thumbnail () ; ?></div>
            <div class="content"><?php the_content () ; ?></div>
        </div>
    
    <?php endwhile ; 
    endif;
    ?>

<?php get_footer()  ?>