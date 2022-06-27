<?php include( '../config/constants.php' );
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Login - food order system</title>
    <link rel='stylesheet' href='../css/admin.css'>
</head>

<body>
    <div class='login'>
        <h1 class='text-center'>Login</h1> <br><br>

        <?php
if ( isset( $_SESSION[ 'login' ] ) )
 {
    echo $_SESSION[ 'login' ];
    unset( $_SESSION[ 'login' ] );
}
?>
        <br>

        <!--Login form starts here-->
        <form action='' method='POST' class='text-center'>
            Username: <br>
            <input type='text' name='username' placeholder='enter username'><br> <br>
            password: <br>
            <input type='password' name='password' placeholder='enter your password'><br><br>
            <input type='submit' name='submit' value='Login' class='btn-primary'> <br><br>
        </form>
        <!--Login form ends here-->

        <p class='text-center'>Created By - <a href='http://mbajerwakaeric.000webhostapp.com/'>MBAJE RWAKA ERIC</p>
    </div>
</body>

</html>
<?php
//check wheter the submit btn is clicked
if ( isset( $_POST[ 'submit' ] ) )
 {
    //proccess for login
    //1. get the data from login form
    $username = $_POST[ 'username' ];
    $password = md5( $_POST[ 'password' ] );

    // 2. sl to check whether the user with the username password exisist
    $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";

    //3. execute the querry
    $res = mysqli_query( $conn, $sql );

    //4. coont rows to check whether the user exisist

    $count = mysqli_num_rows( $res );

    if ( $count == 1 )
 {
        //user availeble and login success
        $_SESSION[ 'login' ] = "<div class='success'>Login successfull.</div>";
        // redisrect to homme page/dashboard
        header( 'location:'.SITEURL.'admin/' );
    } else {
        //user not availabe login fail
        $_SESSION[ 'login' ] = "<div class='error text-center'>username or password did not match.</div>";
        // redisrect to homme page/dashboard
        header( 'location:'.SITEURL.'admin/login.php' );
    }
}
?>