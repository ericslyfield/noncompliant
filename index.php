<?php
/**
* Main Template File
* 
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package     Resonance
 * @link        https://nonarchival.com/themes/resonance
 */

get_header(); 
?>

<?php
	if ( have_posts() ) :

		/* Start the Loop */
		while ( have_posts() ) :

			the_post();

			/*
			 * Include the Post-Format-specific template for the content.
			 * If you want to override this in a child theme, then include a file
			 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
			 */
			get_template_part( 'template-parts/post/format', get_post_format() );
		endwhile;
    endif;
?>
 
<main id="main-content"> silence is golden.</main>

<footer>
    <?php get_footer();?>
</footer>