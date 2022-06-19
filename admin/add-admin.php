<?php include( 'partials/menu.php' );
?>

<div class='main-content'>
    <div class='wrapper'>
        <h1>Add admin</h1>
        <br>
        <form action='' method='POST'>

            <table class='tbl-30'>
                <tr>
                    <td>Full name</td>
                    <td><input type='text' name='full_name' placeholder='enter your name'></td>
                </tr>

                <tr>
                    <td>Username</td>
                    <td><input type='text' name='username' placeholder='enter your username'></td>
                </tr>

                <tr>
                    <td>password</td>
                    <td><input type='password' name='password' placeholder='enter password'></td>
                </tr>

                <tr>
                    <td colspan='2'>
                        <input type='submit' name='submit' value='Add admin' class='btn-secondary'>
                    </td>
                </tr>
            </table>
        </form>

    </div>

</div>

<?php include( 'partials/footer.php' );
?>

<?php
// prosecc the value from form and save it in db
// check whether the submit btn is clicked or not

if ( isset( $_POST[ 'submit' ] ) )
 {
    //btn clicked
    //echo 'button clicked';

    // get the data from form

    echo $full_name = $_POST[ 'full_name' ];

}
?>