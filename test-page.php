<?php
/*
Template Name: Макет Разное 2
Template Post Type: page
*/
get_header(); ?>
    <main>
        <div class="empty-block"></div>
        <?php get_template_part( 'components/quiz'); ?>
        
        <hr><hr><hr>
<?php while( have_posts() ) : the_post(); ?>
        <div class="content box">
			

        </div>
<?php  endwhile; ?>
		 
	
    </main>
<?php get_footer(); ?>