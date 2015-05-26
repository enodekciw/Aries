<?php
/**
 * Main post content template.
 *
 * Used for all post formats.
 *
 * @package Aries
 * @since 1.0.0
 * @author Tom <hello@wplov.in>
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( get_the_title() || has_post_thumbnail() ) : ?>
		<header class="entry-header">
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="post-thumbnail">
				<?php if ( is_singular() ) : ?>
					<?php the_post_thumbnail( 'full' ); ?>
				<?php else : ?>
					<a href="<?php the_permalink(); ?>" title="<?php echo sprintf( __( 'Continue reading %s', 'aries' ), get_the_title() ); ?>"><?php the_post_thumbnail(); ?></a>
				<?php endif; ?>
				</div>
			<?php endif; ?>
			<h1 class="entry-title">
				<?php if ( is_singular() ) : ?>
					<?php the_title(); ?>
				<?php else : ?>
					<a href="<?php the_permalink(); ?>" title="<?php echo sprintf( __( 'Continue reading %s', 'aries' ), get_the_title() ); ?>">
						<?php the_title(); ?>
					</a>
				<?php endif; ?>
			</h1>
			<?php if( !is_page() && ('chat' != get_post_format() && 'quote' != get_post_format() && 'status' != get_post_format() ) ) : ?>
				<?php echo aries_get_post_date(); ?>
			<?php endif; ?>
		</header>
	<?php endif; ?>
    <section class="entry-content">
		<?php the_content( __( 'Continue reading &rarr;', 'aries' ) ) ; ?>
	</section>
	<?php wp_link_pages( 
		array(
			'before'      => '<div class="page-links pagination"><span class="page-links-title">' . __( 'Continue reading &rarr;', 'aries' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'aries' ) . ' </span>%'
		) 
	); ?>
	<?php if( !is_page() && ('chat' != get_post_format() && 'quote' != get_post_format() && 'status' != get_post_format() ) ) : ?>
		<section class="entry-meta">
			<?php aries_post_meta(); ?>
		</section>
	<?php endif; ?>
</article>