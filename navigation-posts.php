<?php
/**
 * Posts navigation
 *
 * @package Aries
 * @since 1.0.0
 * @author Tom <hello@wplov.in>
 */
?><?php 			
	$args = array( 'prev_text' => __( '&larr; Newer', 'aries' ), 'next_text' => __( 'Older &rarr;', 'aries' )); 
	the_posts_pagination( $args ); 
?>