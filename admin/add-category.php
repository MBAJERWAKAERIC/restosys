<?php include( 'partials/menu.php' );
?>

<div class='main-content'>
    <div class='wrapper'>
        <h1>Add category</h1>
        <br><br>

        <?php
if ( isset( $_SESSION[ 'add' ] ) )
 {
    echo $_SESSION[ 'add' ];
    unset( $_SESSION[ 'add' ] );
}
?>
        <br> <br>

        <!-- Add category form stARTS-->
        <form action='' method='POST' enctype='multipart/form-data'>
            <table class='tgl-30'>
                <tr>
                    <td>Title</td>
                    <td>
                        <input type='text' name='title' placeholder='category tilte'>
                    </td>
                </tr>
                <tr>
                    <td> Select image</td>
                    <td>
                        <input type='file' name='image'>
                    </td>
                </tr>
                <tr>
                    <td>Featured:</td>
                    <td>
                        <input type='radio' name='featured' value='Yes'> Yes
                        <input type='radio' name='featured' value='No'> No
                    </td>
                </tr>
                <tr>
                    <td>Active:</td>
                    <td>
                        <input type='radio' name='active' value='Yes'> Yes
                        <input type='radio' name='active' value='No'> No
                    </td>
                </tr>
                <tr>
                    <td colspan='2'>
                        <input type='submit' name='submit' value='Add Category' class='btn-secondary'>
                    </td>
                </tr>

            </table>
        </form>
        <!-- Add category form ENDS-->

        <?php
// check whether the submit btn is clicked
if ( isset( $_POST[ 'submit' ] ) )
 {
    //echo 'clicked';

    //1. Get the value from catrgory form
    $title = $_POST[ 'title' ];

    //for radio input, we need to check whether the btn is clicked
    if ( isset( $_POST[ 'featured' ] ) )
 {
        // get the value from form
        $featured = $_POST[ 'featured' ];
    } else {
        //Set the default value
        $featured = 'no';
    }
    if ( isset( $_POST[ 'active' ] ) )
 {
        $active = $_POST[ 'active' ];

    } else {
        $active = 'No';
    }
    // Check whethr th image is selected and set the valuefor image name accordingly
    //print_r( $_FILES[ 'image' ] );

    //break the code here
    // die();

    if ( isset( $_FILES[ 'image' ][ 'name' ] ) )

    //2. Creat SL query to insert category int db
    $sql = "INSERT INTO tbl_category SET
    title= '$title',
    featured='$featured',
    active='$active'  ";

    //3. Execute the queryand save in the db
    $res = mysqli_query( $conn, $sql );
    //4. Check whether the querry executed and the data added
    if ( $res == true )
 {
        //querry executed and category added
        $_SESSION[ 'add' ] = "<div class='success'> Category added successful</div>";
        // redirect to namage category page
        header( 'location:' .SITEURL. 'admin/manage-category.php' );

    } else {
        //fail to add category
        $_SESSION[ 'add' ] = "<div class='error'> fail to add Category </div>";
        // redirect to namage category page
        header( 'location:' .SITEURL. 'admin/add-category.php' );
    }

}

?>
    </div>
</div>
<?php include( 'partials/footer.php' );
?>