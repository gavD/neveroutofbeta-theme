<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage neveroutofbeta.com
 */

get_header();
?>


        <div id="content">
            <h1><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></h1>
            <div class="inner">
			<?php
			/* Run the loop to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-index.php and that will be used instead.
			 */
			 get_template_part( 'loop', 'index' );
			?>
            </div>

        </div> <!-- /content-->

<?php get_footer(); ?>