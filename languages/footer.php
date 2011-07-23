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
    </div><!--/main-->

    </div>
    <footer>
        Copyright &copy; 2011 | PRO Medical Innovations Ltd | All Rights Reserved
    </footer>
  </div> <!-- eo #container -->

  
<script type="text/javascript">
jQuery(function() {
    jQuery('#content').fadeIn(500);
    if(jQuery('.ngg-galleryoverview').length === 1) {
        var cnt = jQuery('.ngg-gallery-thumbnail a').length;
        var ptr = 0;
        var timeoutCancelled = false;
        
        function showImage(l) {
            var title = jQuery(l).find('img')[0].title;

            jQuery('.ngg-gallery-thumbnail a').removeClass('selected');
            jQuery(l).addClass('selected');

            var snip = "url('" + jQuery(l).find('img')[0].src.replace('thumbs/thumbs_', '') + "')";
            jQuery('#gallery-content').html(title);
            jQuery('#gallery-content').hide();
            jQuery('#gallery-content').slideDown(400);
            jQuery('#main').css('background', snip);
            if(!timeoutCancelled) {
                setTimerForShowNextImage();
            }
        }

        function setTimerForShowNextImage() {
            setTimeout(function() {
                if(timeoutCancelled) {
                    return;
                }
                if(++ptr >= (cnt)) {
                    ptr = 0;
                }
                var relevantLink = jQuery('.ngg-gallery-thumbnail a')[ptr];
                showImage(relevantLink);
            }, 3000);
        }

        showImage(jQuery('.ngg-gallery-thumbnail a')[0]);

        jQuery('.ngg-gallery-thumbnail a').click(function() {
            timeoutCancelled = true;
            showImage(this);
            return false;
        });
    }
});
</script>
</body>
</html>