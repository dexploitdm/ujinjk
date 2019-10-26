<?php
/*
Template Name: Макет Разное 2
Template Post Type: page
*/
get_header(); ?>
    <main>
        <div class="empty-block"></div>
<?php while( have_posts() ) : the_post(); ?>
        <div class="content box">



        </div>
<?php  endwhile; ?>

    </main>
<?php get_footer(); ?>