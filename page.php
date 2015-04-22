<?php
/**
 * Page template file
 *
 * @package Aries
 * @since 1.0.0
 * @author Tom <hello@wplovin.com>
 */
?><?php get_header(); ?>
	<section class="content-wrap <?php aries_content_wrap_class(); ?>">

		<div class="content-wrap-inner clearfix">

			<div class="posts-wrapper">

				<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; else : ?>
					<?php get_template_part( 'content', 'none' ); ?>
				<?php endif; ?>
				<?php get_template_part( 'navigation', 'posts' ); ?>

				<?php comments_template(); ?>
				
			</div>

			<?php get_sidebar(); ?>
			
		</div>

	</section>
<?php get_footer(); ?>