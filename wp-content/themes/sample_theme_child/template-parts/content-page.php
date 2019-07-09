<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sampletheme
 */

?>
<div class="polylang-dropdwn" id="polylang-cust-dropdwn"><?php pll_the_languages( array( 'dropdown' => 1 ) ); ?></div>
<?php sample_theme_post_thumbnail(); ?>
	<?php
	the_content();

	wp_link_pages( array(
		'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sample_theme' ),
		'after'  => '</div>',
	) );
	?>

<?php if ( get_edit_post_link() ) : ?>
<?php endif; ?>
