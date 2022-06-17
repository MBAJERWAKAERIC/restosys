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
                    <td>Full name</td>
                    <td><input type='text' name='full_name' placeholder='enter your name'></td>
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