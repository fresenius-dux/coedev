<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bootstrap to WordPress
 */
?>
<?php $loop = new WP_Query( array( 'post_type' => array('wlthmconferencerooms', '950conferencerooms', 'lexconferencerooms'),'orderby'=>'title', 'order'=>'ASC' ) ); ?>

<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
<?php 
    $roomnumber = get_field('roomnumber');
    $floorlevel = get_field('floorlevel');
    $capacity = get_field('capacity');
    $hasprojector = get_field('hasprojector');
    $directions = get_field('directions');

?>
<div class="hidden">
  <div class="row">
      <div class="location">
          <h4><?php the_title(); ?></h4>
      </div>
      <div class="directions" data-room="<?php the_title(); ?>">
                          <p>Room Number: <strong><?php echo $roomnumber ?></strong></p>
                          <?php if (!empty($capacity)): ?>
                          <p>Capacity: <strong><?php echo $capacity ?></strong></p>
                          <?php else: ?>
                          <p>Capacity: <strong><?php echo "N/A" ?></strong></p>
                          <?php endif; ?>
                          <?php if (!empty($hasprojector)): ?>
                          <p>Has Projector? <strong><?php echo $hasprojector ?></strong></p>
                          <?php else: ?>
                          <p>Has Projector? <strong><?php echo "No" ?></strong></p>
                          <?php endif; ?>
                          <p>On Level: <strong><?php echo $floorlevel ?></strong></p>
                          <p>Directions Off Elevator: <strong><?php echo $directions ?></strong></p>
                      </div>
  </div>
</div>
<!-- team-member col end-->
<?php endwhile; wp_reset_query(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(' roomBlock '); ?>>
	<header class="entry-header location active">
		<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
	</header><!-- .entry-header -->
	
	
</article><!-- #post-## -->