<?php
ini_set( "display_errors", false );
date_default_timezone_set( "Australia/Sydney" );
define( "DB_DSN", "mysql:host=localhost;dbname=bloggrPro" );
define( "DB_USERNAME", "bloggrPro" );
define( "DB_PASSWORD", "bloggrPro" );
define( "CLASS_PATH", "classes" );
define( "TEMPLATE_PATH", "templates" );
define( "HOMEPAGE_NUM_ARTICLES", 4 );
define( "ADMIN_USERNAME", "administrator" );
define( "ADMIN_PASSWORD", "bloggrPro" );
require( CLASS_PATH . "/Article.php" );

function handleException( $exception ) {
  echo "It seems that <?php include'strings/str.blog.name.php'; ?> is having problems right now.
    <br /><b>STATUS OF <?php include 'strings/str.blog.name.php'; ?></b>: <i>&quot; <?php include 'strings/str.blog.activeStatus.php'; ?> &quot;</i>"; error_log( $exception->getMessage() ); } set_exception_handler( 'handleException' ); ?>