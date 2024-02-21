<?php
session_start();
session_destroy();{

header('location:./pages/sign-in.php');
}

?>