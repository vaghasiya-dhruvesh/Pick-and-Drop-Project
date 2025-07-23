<?php
session_start();
session_destroy();
unset($_SESSION['oid']);
if(isset($_SESSION['oid'])){
    echo "Something went wrong. Not able to logout";
}else{
    header('location:../../../index.php');
}
?>