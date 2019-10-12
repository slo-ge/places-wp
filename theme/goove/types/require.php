<?php
require_once 'location.php';

add_action( 'init', 'add_custom_post_types', 0 );

function add_custom_post_types() {
    add_location_post_type();
}