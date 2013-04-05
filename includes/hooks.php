<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

**
 * Just after opening <body> tag
 *
 * @see header.php
 */
function wstrap_loadscripts() {
    do_action('responsive_container');
}
