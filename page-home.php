<?php
/*
	Template Name: Home Page	
*/

get_header(); ?>
    
        <?php get_template_part('tmpl/content','hero'); ?>
        <?php get_template_part('tmpl/content','practices'); ?>
        <?php get_template_part('tmpl/content','handoff'); ?>
    
<?php get_footer(); ?>