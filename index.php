<?php
   /*
   Plugin Name: Google Map Lazy Loading
   Plugin URI: http://dixeam.com
   Description: Google Map make site slow, this plugin load the google map when scroll down.
   Version: 1.2
   Author: Dixeam Developer- Qaiser
   Author URI: http://dixeam.com
   License: GPL2
   */
if ( ! is_admin() ) {
   add_shortcode( 'gmap', 'load_map' );

   function load_map($atts) {
      echo '<style>.google-map{width:100%;height:300px;margin:0 auto;}</style>';
      echo '<div class="google-map" data-lat="'.$atts['lat'].'" data-lng="'.$atts['long'].'"></div>';
?>
<script type="text/javascript" src="<?php echo plugin_dir_url(__FILE__).'jquery.lazy-load-google-maps.js'; ?>"></script>
<?php } } ?>
