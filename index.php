<?php
session_start();
include 'config.php';

/// Session ellenrz�se. Ha nincs, akkor �tdob a bel�p�s oldalra.
if(isset( $_SESSION['user'] ))
{
 /// Ha ba van l�pve...
}
 else {
    header('Location: belepes.php');   
}

echo 'index';

?>

