<?php
/*
Template Name: Макет Главной
Template Post Type: page
*/
get_header(); ?>
    <main>
        <?php get_template_part( 'components/banboxes/ban-home'); ?>

        <?php get_template_part( 'components/about'); ?>

    </main>
<?php get_footer(); ?>