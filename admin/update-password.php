<?php include( 'partials/menu.php' );
?>

<div class='main-content'>
    <div class='wrapper'>
        <h1>Change password</h1>
        <br><br>

        <?php
if ( isset( $_GET[ 'id' ] ) )
 {
    $id = $_GET[ 'id' ];
}
?>

        <form action='' method='POST'>

            <table class='tbl-30'>
                <tr>
                    <td>Current password:</td>
                    <td>
                        <input type='password' name='current_password' placeholder='current password'>
                    </td>
                </tr>

                <tr>
                    <td>New Password:</td>
                    <td>
                        <input type='password' name='new_password' placeholder='New password'>
                    </td>
                </tr>

                <tr>
                    <td>Confirm password:</td>
                    <td>
                        <input type='password' name='confirm_passwor' name='confirm password'
                            placeholder='confirm password'>
                    </td>
                </tr>

                <tr>
                    <td colspan='2'>
                        <input type='hidden' name='id' value="<?php echo $id;?>">
                        <input type='submit' name='submit' value='Change password' class='btn-secondary'>
                    </td>
                </tr>
            </table>
        </form>

    </div>
</div>

<?php
// check whether the submit btn is clicked
if ( isset( $_POST[ 'submit' ] ) )
 {
    //echo 'clicked';
    //1. Get the data from form
    $id = $_POST[ 'id' ];
    $current_password = md5( $_POST[ 'current_password' ] );
    $new_password = md5( $_POST[ 'new_password' ] );
    $confirm_password = md5( $_POST[ 'confirm_password' ] );

    //2. check whether the user  with the current id and current password existe
    $sql = "SELECT * FROM tbl_admin WHERE id=$id AND password='$current_password'";

    //execute the querry

    $res = mysqli_query( $conn, $sql );

    if ( $res == TRUE )
 {
        // check whether data is AVAILABLA
        $count = mysqli_num_rows( $res );

        if ( $count == 1 )
 {
            //user exist and the paasord can be changed
            echo 'user found';
        } else {
            //user does not exit set msg and redirect
            $_SESSION[ 'user-not-found' ] = "<div class='error'>user not found.</div>";
            //reirect user
            header( 'location:'.SITEURL. 'admin/manage-admin.php' );
        }
    }
    // 3. check whether the new passwoed and confirm password match or not

    //4. change the password if all above is true
}
?>

<?php include( 'partials/footer.php' );
?>