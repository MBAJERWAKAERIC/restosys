<?php
//include onstants.php
include( '../config/constants.php' );

// 1. get the id of admin to be deleted
$id = $_GET[ 'id' ];

//2.create sql querry to delete  admin
$sql = "DELETE FROM tbl_admin WHERE id=$id";

//execute the query
$res = mysqli_query( $conn, $sql );

//check whether querry executed successfully or not
if ( $res == TRUE )
 {
    //QUERY EXECUTED SUCCESSFULL and admin deeted
    //echo 'admin deleted';
    //create sessioN variable to display the msg
    $_SESSION[ 'delete' ] = 'admin deleted successfull';

    // redirect to manage admin page
    header( 'location:'.SITEURL.'admin/manage-admin.php' );
} else {
    //failed to delete admin
    //echo'Failed to delete admin';

    $_SESSION[ 'delete' ] = 'failed to delete admin. try again later';

    // redirect to manage admin page
    header( 'location:'.SITEURL.'admin/manage-admin.php' );
}
//3. Redirect to manage admin page with msg ( success/error )

?>