<?php
session_start();
session_destroy();
unset($_SESSION['aid']);
if(isset($_SESSION['aid'])){
    echo "Something went wrong. Not able to logout";
}else{
    header('location:../../../index.php');
}
?>