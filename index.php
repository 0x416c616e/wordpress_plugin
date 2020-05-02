<?php
/*
Plugin name: Alan's First Wordpress Plugin
Plugin URI: https://github.com/0x416c616e/wordpress_plugin
Description: My first plugin
Author: Alan
Author URI: https://github.com/0x416c616e
Version: 0.1
*/
add_action("admin_menu", "addMenu");
function addMenu(){
    add_menu_page("Example Options", "Example Options", 4, "example-options", "exampleMenu");
    add_submenu_page("example-options", "Option 1", "Option 1", 4, "example-option-1", "d6");
}

function exampleMenu(){
    echo "You can roll dice here!";
}

function d6() {
    echo strval(rand(1, 6));
}

function d20() {
    echo strval(rand(1, 20));
}

?>