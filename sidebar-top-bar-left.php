<?php if ( is_active_sidebar( 'top-bar-left' ) ) {
	dynamic_sidebar( 'top-bar-left' );
} else {
	echo '<div class="sidebar-top">';
	the_widget( 'WP_Widget_Search' );
	echo '</div>';
}
?>
