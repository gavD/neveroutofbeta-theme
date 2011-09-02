<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage neveroutofbeta.com
 */
?>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>



    </div>
  </div> <!-- eo #container -->

<script type="text/javascript" src="/wp-content/themes/neveroutofbeta/noob/js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/neveroutofbeta/noob/js/jquery.noob.js"></script>
  
</body>
</html>