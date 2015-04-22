<?php
/**
 * Main sidebar template. Visible on single posts / pages (except, if 'Fullwidth page template is used').
 *
 * Include it with get_sidebar();
 *
 * @package Aries
 * @since 1.0.0
 * @author Tom <hello@wplovin.com>
 */
?><?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
	<div class="sidebar-wrap">

		<?php dynamic_sidebar( 'sidebar-1' ); ?>
		
	</div>
<?php } ?>