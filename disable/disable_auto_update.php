<?php
// Disabling All Updates Via Filter
add_filter('automatic_updater_disabled', '__return_true');

// Core Updates via Filter
add_filter('auto_update_core', '__return_false');

//disable development updates 
add_filter('allow_dev_auto_core_updates', '__return_false');

//disable minor updates
add_filter('allow_minor_auto_core_updates', '__return_false');

//disable major updates      
add_filter('allow_major_auto_core_updates', '__return_false');

// Disable automatic updates for All plugins:
add_filter('auto_update_plugin', '__return_false');

// Disable automatic updates for All themes:
add_filter('auto_update_theme', '__return_false');

// To disable translation file updates, use the following:
add_filter('auto_update_translation', '__return_false');
