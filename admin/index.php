<?php include( 'partials/menu.php' );
?>

<!--Menu contents Section starts -->
<div class='main-content'>
    <div class='wrapper'>
        <h1><strong>DASHBOARD</strong></h1>
        <br>

        <?php
if ( isset( $_SESSION[ 'Login' ] ) )
 {
    echo $_SESSION[ 'Login' ];
    unset( $_SESSION[ 'Login' ] );
}
?>

        <br>
        <div class='col-4 text-center'>
            <h1>5</h1>
            <br />
            Categories
        </div>

        <div class='col-4 text-center'>
            <h1>5</h1>
            <br />
            Categories
        </div>

        <div class='col-4 text-center'>
            <h1>5</h1>
            <br />
            Categories
        </div>

        <div class='col-4 text-center'>
            <h1>5</h1>
            <br />
            Categories
        </div>

        <div class='clearfix'></div>
    </div>
</div>
<!-- Menu contents section ends -->

<?php include( 'partials/footer.php' );
?>