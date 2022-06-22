<?php include( 'partials/menu.php' );
?>

<div class='main-content'>
    <div class='wrapper'>
        <h1>UPDATE ADMIN </h1>
        <br><br>
        <?php
// 1. Get the  id for the selected admin
$id = $_GET[ 'id' ];

// 2. create the sql query to get the details
$sql = "SELECT * FROM tbl_admin WHERE id=$id";

// 3. execute the query
$res = mysqli_query( $conn, $sql );

// check whether the quey is executed
if ( $res == TRUE )
 {
    // check whether the data is available
    $count = mysqli_num_rows( $res );
    // check whether we have admin data
    if ( $count == 1 )
 {
        // Get the details
        //echo 'Admi available';
        $row = mysqli_fetch_assoc( $res );

        $full_name = $row[ 'full_name' ];
        $username = $row[ 'username' ];
    } else {
        // redirect to manage admin page
        header( 'location:'.SITEURL. 'admin/manage-admin.php' );
    }
}
?>

        <form action='' method='POST'>
            <table class='tbl-30'>
                <tr>
                    <td>Full name: </td>
                    <td>
                        <input type='text' name='full_name' value='<?php echo $full_name?>'>
                    </td>
                </tr>

                <tr>
                    <td>Username</td>
                    <td>
                        <input type='text' name='username' value='<?php echo $username?>'>
                    </td>
                </tr>

                <tr>
                    <td colspan='2'>
                        <input type='submit' name='submit' value='update admin' class='btn-secondary'>
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
    echo 'button clicked';
}
?>

<?php include( 'partials/footer.php' );
?>