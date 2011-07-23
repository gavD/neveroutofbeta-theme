<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage neveroutofbeta.com
 */

get_header();
?>

<div id="content">
    <h1 class="margL"><?php printf( __( '%s', 'twentyten' ), '' . single_cat_title( '', false ) . '' ); ?></h1>
    <div class="subNav topLine">
        <?php the_meta(); ?>
    </div><!--/subNav-->
    <div class="colRightSub topLine">
   <?php
        $category_description = category_description();
        if ( ! empty( $category_description ) )
            echo '' . $category_description . '';

    /* Run the loop for the category page to output the posts.
     * If you want to overload this in a child theme then include a file
     * called loop-category.php and that will be used instead.
     */
    get_template_part( 'loop', 'category' );
    ?>
    </div>
			
</div>
<?php get_footer(); ?>
