<?php include ( 'partials/menu.php' );
?>

<div class='main-content'>
    <div class='wrapper'>
        <h1><strong>MANAGE CATEGORY</strong></h1>

        <br /> <br>
        <?php
        if ( isset( $_SESSION[ 'add' ] ) )
         {
            echo $_SESSION[ 'add' ];
             unset( $_SESSION[ 'add' ] );
        }
        ?>
        <br><br>
        <!-- button to add admin -->
        <a href='<?php SITEURL;?>add-category.php' class='btn-primary'>ADD CATEGORY</a>
        <br /> <br /> <br /> <br />
        <table class="tbl-full">
            <tr>
                <th>S.N.</th>
                <th>Full Name</th>
                <th>User-name</th>
                <th>Actions</th>
            </tr>

            <tr>
                <td>1.</td>
                <td>MBAJE RWAKKA</td>
                <td>ericmbajerwaka</td>
                <td><a href='#' class='btn-secondary'>update admin</a>
                <td><a href='#' class='btn-danger'>Delete admin</a>
                </td>
            </tr>

            <tr>
                <td>2.</td>
                <td>MBAJE RWAKKA</td>
                <td>ericmbajerwaka</td>
                <td><a href='#' class='btn-secondary'>update admin</a>
                <td><a href='#' class='btn-danger'>Delete admin</a>
            </tr>

            <tr>
                <td>3.</td>
                <td>MBAJE RWAKKA</td>
                <td>ericmbajerwaka</td>
                <td><a href='#' class='btn-secondary'>update admin</a>
                <td><a href='#' class='btn-danger'>Delete admin</a>
            </tr>

            </tr>
        </table>
    </div>
</div>

<?php include ( 'partials/footer.php' )
?>