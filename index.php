<?php
session_start();

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

