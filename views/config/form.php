<?php
/*
Plugin Name: Small Block HTML Area
Plugin URI: https://github.com/Jody-Geers/jjg-small-block-html-area
Description: JJG HTML Block widgit.
Version: 1.0
Author: Jody Jacobus Geers
Author URI: http://jody-geers.github.io/
License: GPL3
*/
?>
<p>Title: <input name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" /></p>
<p>HTML content: <input name="<?php echo $this->get_field_name( 'htmlContent' ); ?>" type="text" value="<?php echo esc_attr( $htmlContent ); ?>" /></p>
