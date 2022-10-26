<?php include 'partials/menu.php';
?>
<div class='main-content'>
    <div class='wrapper'>
        <h1>Add admin</h1>
        <br />

        <?php
if (isset($_SESSION['add'])) //checking wether the sesson is set or not {
echo $_SESSION['add'];
// displaing the session msg if set
unset($_SESSION['add']);
//removing the session msg
}
    ?>
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

<?php include 'partials/footer.php';
    ?>

<?php
// prosecc the value from form and save it in db
// check whether the submit btn is clicked or not

    if (isset($_POST['submit'])) {
        //btn clicked
        //echo 'button clicked';

        // get the data from form

        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        //password ecription with md5

        //2. SQL Query to save intp the dabase

        $sql = "INSERT INTO tbl_admin SET
        full_name='$full_name',
        username='$username',
        password='$password'";

        //3. execute query and saving data into db
        $res = mysqli_query($conn, $sql) or die(mysqli_error());

        //4. check wether the data is inserted or not and display appropriete msg
        if ($res == true) {
            //DATA INSERTED
            //echo 'data inserted';
            //Creat a session variable to display msg
            $_SESSION['add'] = 'Admin added Successfully';
            //redirect page TO MANAGE ADMIN
            header('location:' . SITEURL . 'admin/manage-admin.php');
        } else {
            //ailed to insert
            // echo 'Failed to insert';
            //Creat a session variable to display msg
            $_SESSION['add'] = 'fail to add admin';
            //redirect page TO add ADMIN
            //faoled to find my pwd in the db
            header('location:' . SITEURL . 'admin/manage-admin.php');
        }

    }
    ?>
