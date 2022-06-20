<?php include 'partials/menu.php'?>

<!--Menu contents Section starts -->
<div class='main-content'>
    <div class='wrapper'>
        <h1><strong>MANAGE ADMIN</strong></h1>
        <br>
        <?php
if ( isset( $_SESSION[ 'add' ] ) )
 {
    echo $_SESSION[ 'add' ];
    // displaing the session msg
    unset( $_SESSION[ 'add' ] );
    //removing the session msg
}

if ( isset( $_SESSION[ 'delete' ] ) )
echo $_SESSION[ 'delete' ];
unset( $_SESSION[ 'delete' ] );
?>
        <br> <br>
        <!-- button to add admin -->
        <a href='add-admin.php' class='btn-primary'>Add admin</a>
        <br /> <br /> <br />
        <table class='tbl-full'>
            <tr>
                <th>S.N.</th>
                <th>Full Name</th>
                <th>User-name</th>
                <th>Actions</th>
            </tr>
            <?php
//query to get all admin
$sql = 'SELECT * FROM tbl_admin';
//execute the uerry
$res = mysqli_query( $conn, $sql );

//check whether the querry is executed or not
if ( $res == TRUE )
 {
    //Count rows to ckeck whether we have data in the db
    $count = mysqli_num_rows( $res );
    // function to get all the rows in the db

    $sn = 1;
    // create a variable and assign the alue

    //check the num of rows
    if ( $count>0 )
 {
        // we have data in the db
        while( $rows = mysqli_fetch_assoc( $res ) )
 {
            //3using while loop to get all the data from the db and it will run as long as we have data in the db

            //Get the individual data
            $id = $rows[ 'id' ];
            $full_name = $rows[ 'full_name' ];
            $username = $rows[ 'username' ];

            //display the value in our tbl
            ?>

            <tr>
                <td><?php echo $sn++;
            ?></td>
                <td><?php echo $full_name;
            ?></td>
                <td><?php echo $username;
            ?></td>
                <td><a href='#' class='btn-secondary'>update admin</a>
                    <a href='<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id;?>'
                        class='btn-danger'>Delete admin</a>
                </td>
            </tr>

            <?php
        }
    } else {
        //we don't have data in db
    }
}
?>

        </table>
    </div>
</div>
<!-- Menu contents section ends -->

<?php include 'partials/footer.php';
        ?>