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
    add_menu_page("Dice Roller Menu", "Dice Roller Menu", 4, "example-options", "exampleMenu");
    add_submenu_page("d6", "Roll D6", "Roll D6", 4, "roll-d6", "d6");
    add_submenu_page("d20", "Roll D20", "Roll D20", 4, "roll-d20", "d20");
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