<?php
session_start();
include 'config.php';

/// Session ellenrzése. Ha nincs, akkor átdob a belépés oldalra.
if(isset( $_SESSION['user'] ))
{
 /// Ha ba van lépve...
}
 else {
    header('Location: belepes.php');   
}

echo 'index';

?>

