<?php
//Authorization  -access control
// chech whether the user is logged in
//if a user session is not set
if ( !isset( $_SESSION[ 'user' ] ) )
 {
    //User is not logged\
    //redirect to the login page with error massage
    $_SESSION[ 'no-login-message' ] = "<div class='error text-center'>Please login to access the admin panel</div>";

    // redirect to login page
    header( 'location:'.SITEURL. 'admin/login.php' );
}
?>