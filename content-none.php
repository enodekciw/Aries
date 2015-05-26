<?php
/**
 * 'NOT FOUND' content template.
 *
 * @package Aries
 * @since 1.0.0
 * @author Tom <hello@wplov.in>
 */
?>
<article id="post-none" class="hentry">

	<header class="entry-header">
		<h1 class="entry-title">
	    	<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
	    		<?php _e( 'No posts published so far.', 'aries' ); ?>
	    	<?php elseif ( is_search() ) : ?>
				<?php _e( 'Try again?', 'aries' ); ?>
	    	<?php else : ?>
				<?php _e( 'Ooops.. 404.', 'aries' ); ?>
			<?php endif; ?>
		</h1>
	</header>

    <section class="entry-content">
    	<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
    		<p><?php printf( __( 'No posts published so far. <a href="%1$s">Ready to speak out?</a>.', 'aries' ), admin_url( 'post-new.php' ) ); ?></p>
    	<?php elseif ( is_search() ) : ?>
			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'aries' ); ?></p>
			<?php get_search_form(); ?>
    	<?php else : ?>
			<p><?php _e( 'Perhaps try searching the site?', 'aries' ); ?></p>
			<?php get_search_form(); ?>
		<?php endif; ?>
	</section>

</article>