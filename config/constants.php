<?php
//Start session
session_start();
// create constants to store non repeating values
define( 'SITEURL', 'http://localhost/restosys/' );
define( 'LOCALHOST', 'localhost' );
define( 'DB_USERNAME', 'root' );
define( 'DB_NAME', 'food-order' );
define( 'DB_PASSWORD', '' );

// execute querry and save data in the db
$conn = mysqli_connect( LOCALHOST, DB_USERNAME, DB_PASSWORD ) or die( mysqli_error() );
//db connection
$db_select = mysqli_select_db( $conn, DB_NAME ) or die( mysqli_error() );
// selecting db
?>