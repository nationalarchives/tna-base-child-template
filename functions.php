<?php

include 'inc/functions-globals.php';
include 'inc/functions-identify-environment.php';
include 'inc/functions-child.php';

// For Breadcrumbs and URLs
$environment = identifyEnvironmentFromIP( $_SERVER['SERVER_ADDR'], $_SERVER['REMOTE_ADDR'] );
setThemeGlobals( $environment );

// add_action
add_action( 'wp_enqueue_scripts', 'dequeue_parent_style', 9999 );
add_action( 'wp_head', 'dequeue_parent_style', 9999 );
add_action( 'wp_enqueue_scripts', 'tna_child_styles' );
