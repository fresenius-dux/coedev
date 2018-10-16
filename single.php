<?php
/**
 * The template for displaying all single posts.
 *
 * @package Bootstrap to WordPress
 */

get_header(); ?>

	<!-- BLOG CONTENT
	================================================== -->
	<div class="container">
		<div class="row" id="primary">
            <div class="col-sm-12">
                <?php get_search_form(); ?>
            </div>
			<main id="content" class="col-sm-8">

			<?php while ( have_posts() ) : the_post(); ?>
	
				<?php get_template_part( 'content', 'single' ); ?>
	
				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
	
			<?php endwhile; // end of the loop. ?>

			</main><!-- #content -->
			
			
		</div><!-- #primary -->
	</div><!-- .container -->

<?php get_footer(); ?>
