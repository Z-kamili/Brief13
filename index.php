<?php
/*
Plugin Name: brief 13
Plugin URI: https://simplonline.co/
Description: Ceci est mon premier plugin
Author: jamal eddine noman
Version: 1.0
Author URI: https://ma.linkedin.com/in/jamalnoman97
*/

if(!defined('ABSPATH'))
{
    exit;
}

add_action("admin_menu","addMenu");
function addMenu()
{
    //add_menu_page('Page title', 'Top-level menu title', 'manage_options', 'my-top-level-handle', 'my_magic_function');
    add_menu_page("footer","footer",4,"footer","examplefooter",'dashicons-networking');
}
function examplefooter()
{
    include_once('footer.php');
}
function your_function() {
    echo "<div style='background-color: #001524;text-align: center;
    font-size: 30px;
    padding: 20px;'><a style='color: rgba(255,255,255,0.72);' onMouseOver=\"this.style.color='#8bc34a'\"
    onMouseOut=\"this.style.color='rgba(255,255,255,0.72)'\" href='".get_option('footer_link')."'>".get_option('footer_text')."</a></div>";
}
add_action( 'wp_footer', 'your_function' );
?>
