<?php
/**
 * Plugin Name: APRC Front Blog
 * Plugin URI: http://www.aprc.fr
 * Description: Custom layout for DIVI blog.
 * Version: 1.0.3
 * Author: Julz Hernandez
 * Author URI: http://julzhernandez.com
 * License: GPL2
 */


// Register style sheet.
add_action( 'wp_enqueue_scripts', 'aprc_front_blog' );

/**
 * Register style sheet.
 */
function aprc_front_blog() {
	wp_enqueue_style('aprc_front-blog', plugin_dir_url( __FILE__ ) . 'css/aprc_front-blog.css' );
}


add_action( 'wp_head', 'add_poppin_font' );
function add_poppin_font() {
  echo '<link href="https://fonts.googleapis.com/css?family=Poppins:400,600" rel="stylesheet">
		
		<script type="text/javascript">
		jQuery(document).ready(function(){
		jQuery(".more-link").text("Lire la suite");
		});
		</script>

		<script type="text/javascript">
		jQuery(document).ready(function(){
		jQuery("article.et_pb_post").each(function(){
		jQuery(">a:first-child, .entry-title", this).insertAfter(jQuery(".post-meta", this));
		});
		});
		</script>
		
';
}



//Shortcode to show the module
function showmodule_shortcode($moduleid) {
extract(shortcode_atts(array('id' =>'*'),$moduleid)); 
return do_shortcode('[et_pb_section global_module="'.$id.'"][/et_pb_section]');
}
add_shortcode('showmodule', 'showmodule_shortcode');
