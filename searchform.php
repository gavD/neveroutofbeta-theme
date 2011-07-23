<?php
/**
 * The template for displaying Search Form
 *
 * see wp-includes/general-template.php
 *
 * @package WordPress
 * @subpackage neveroutofbeta.com
 */

get_header(); ?>

<?php $search_text = "Search"; ?>
<form role="search" method="get" id="searchform" action="<?php home_url('/') ?>/">
    <div>
    <input type="text" value="<?php echo $search_text; ?>"  name="s" id="s"
       onblur="if (this.value == '')  {this.value = '<?php echo $search_text; ?>';}"
       onfocus="if (this.value == '<?php echo $search_text; ?>')
{this.value = '';}"
/><input type="submit" id="searchsubmit" alt="Search" value="Search" />
    </div>
</form>